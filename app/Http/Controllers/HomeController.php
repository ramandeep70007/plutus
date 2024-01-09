<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Assignment;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Announcement;
use App\Models\EmployeeProfile;
use App\Models\ClientProfile;
use App\Models\TimeSheet;
use App\Models\Issue;
use App\Models\Event;
use App\Models\Notification;
use Illuminate\Support\Facades\File;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\UserInfo;
use App\Models\DataModel;
use App\Models\OutOfExpense;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\PolicyFile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $employees = User::where('role', 'Employee')->get();
        $clients = User::where('role', 'Client')->get();
        $results = DB::table('assignments as a')
    ->join('users as u', 'u.id', '=', 'a.client_id')
    ->join('users as us', 'us.id', '=', 'a.employee_id')
    ->select('a.*', 'u.*', 'us.*') // Adjust the columns as needed
    ->get();
    $policy = PolicyFile::latest()->get();

    if ($user->role === 'Admin') {
        $announcements = Announcement::latest()->get();
        return view('admin.dashboard.index',compact('employees','policy','clients','announcements','user','results')); // Return the admin dashboard view
    } elseif ($user->role === 'Client') {
        $clientdata = ClientProfile::where('client_id', $user->id)->first();
        $cli_announcements = Announcement::where('role', 'Client')->latest()->get();
        $today = Carbon::now()->toDateString(); // Get the current date in YYYY-MM-DD format

      $events = DB::table('events as e')
    ->join('users as u', 'u.id', '=', 'e.client_id')
    ->where('e.client_id', $user->id)
    ->whereDate('e.start', '>=', $today)
    ->select('title', DB::raw('MAX(start) as start'), DB::raw('MAX(description) as description'))
    ->groupBy('title')
    ->get();

            // dd($events);
        return view('user.dashboard.index', ['user' => $user,'policy' => $policy,'clientdata' => $clientdata ,'cli_announcements' => $cli_announcements,'events' => $events]);
    }
    
    elseif ($user->role === 'Employee') {
        // dd($user);
        $empl_announcements = Announcement::where('role', 'Employee')->latest()->get();
        $results = DB::table('assignments as a')
        ->leftJoin('timesheets as t', 'a.client_id', '=', 't.client_id')
        ->join('users as u', 'u.id', '=', 'a.client_id')
        ->where('a.employee_id', $user->id)
        ->select(
            'u.id as client_id',
            'u.name as client_name',
            'a.employee_id',
            DB::raw('DATE(t.created_at) as date'), // Extract the date
            DB::raw('GROUP_CONCAT(t.timesheet_txt) as combined_timesheet_txt'),
            DB::raw('COALESCE(SUM(t.spenttime), 0) as timespent'),
            DB::raw('MAX(t.created_at) as latest_timesheet_created_at') // Include created_at
        )
        ->groupBy('u.id', 'u.name', 'a.employee_id', 'date') // Group by date as well
        ->get();
    
        return view('employee.dashboard.index', ['user' => $user,'policy' => $policy,'empl_announcements'=>$empl_announcements,'results'=>$results]);
    }

    
    }
public function policymanual()
{
    $policy = PolicyFile::latest()->get();
            $announcements = Announcement::latest()->get();

     return view('admin.policymanual.index',compact('policy','announcements'));
}
    
    public function clientsview()
    {
        // $clients = DB::table('users')
        //         ->join('assignments', 'users.id', '=', 'assignments.client_id' )
        //         ->select('users.*', 'assignments.*') // Select the columns you need
               
        //         ->get();
        $clients = UserInfo::where('role', 'Client')->get();  
                // foreach ($clients as $client) {
                //     $employee = null;
                //     if ($client->employee_id) {
                //         // Fetch the employee data if employee_id is not null
                //         $employee = DB::table('users')->where('id', $client->employee_id)->first();
                //     }
            
                //     $client->employee_name = $employee ? $employee->name : 'No Employee Found';
                // }

        return view('admin/client/list',compact('clients'));
    }

    public function admindse()
    {
        
        $clients = User::where('role', 'Client')->get(); 
       $dataModels = DB::table('data_models')
    ->leftJoin('users', 'users.id', '=', 'data_models.client_id')
    ->select('data_models.*', 'users.name')
    ->whereNull('data_models.client_id')
    ->orWhereNotNull('data_models.client_id')
    ->get();



    // dd($dataModels);
        return view('admin/dsc/index',compact('clients','dataModels'));
    }

    public function storedse(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            // 'client_id' => 'required',
            'directorname' => 'required|string',
            // 'din_number' => 'string',
            'valid_from' => 'required|date', 
            'valid_till' => 'required|date',
            'dsc_location' => 'required|string',
            // 'expiry_status' => 'string',
            // 'renewal' => 'required|string',
            // 'mobile_no' => 'required',
            // 'email' => 'required',
            // 'father_name' => 'required',
            // 'pan_file' => 'required',
            // 'aadhar_file' => 'required',
            // 'profile_file' => 'required',
        ]);
    $panFilePath = null;
$aadharFilePath = null;
$profileFilePath = null;
      if ($request->hasFile('pan_file')) {
    $panFilePath = $request->file('pan_file')->store('uploads');
}

if ($request->hasFile('aadhar_file')) {
    $aadharFilePath = $request->file('aadhar_file')->store('uploads');
}

if ($request->hasFile('profile_file')) {
    $profileFilePath = $request->file('profile_file')->store('uploads');
}


    // Create a new DataModel instance and fill it with the validated data
    $dataModel = new DataModel([
        'client_id' => $request->client_id,
        'Nonclient' => $request->Nonclient,
        'directorname' => $validatedData['directorname'],
        'din_number' => $request->din_number,
        'valid_from' => $validatedData['valid_from'],
        'valid_till' => $validatedData['valid_till'],
        'expiry_status' => $request->expiry_status,
        'renewal' => $request->renewal,
        'mobile_no' => $request->mobile_no,
        'email' => $request->email,
        'father_name' => $request->father_name,
        'dsc_location' => $request->dsc_location,
        'pan_file_path' => $panFilePath,
        'aadhar_file_path' => $aadharFilePath,
        'profile_file_path' => $profileFilePath,
    ]);

    // Save the data to the database
    $dataModel->save();
    
        // Redirect back with a success message (you can customize this)
        return redirect()->back()->with('success', 'Data added successfully.');
    }

public function assignClient(Request $request) {
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'client_id' => 'required|array',
        'employee_id' => 'required|string|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/admin/employees')
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Validation failed');
    }

    $employeeId = $request->input('employee_id');
    $selectedClientIds = $request->input('client_id');
    $alreadyAssignedCount = 0;
    $newlyAssignedCount = 0;

    // Loop through the selected client IDs
    foreach ($selectedClientIds as $clientId) {
        $existingAssignment = Assignment::where('client_id', $clientId)
            ->where('employee_id', $employeeId)
            ->first();

        if ($existingAssignment) {
            $alreadyAssignedCount++;
        } else {
            // If no assignment exists, create a new one
            Assignment::create([
                'employee_id' => $employeeId,
                'client_id' => $clientId,
            ]);
            $newlyAssignedCount++;
        }
    }

    if ($request->ajax()) {
        return response()->json(['message' => 'Client(s) assigned successfully']);
    }

    $announcements = Announcement::all();

    $message = $newlyAssignedCount . ' client(s) assigned successfully. ' . $alreadyAssignedCount . ' client(s) were already assigned to the employee.';

    return redirect('/admin/employees')->with([
        'success' => $message,
        'announcements' => $announcements,
    ]);
}


public function uploadPolicy(Request $request)
{
    try {
        $validatedData = $request->validate([
            'policy.*' => 'file|mimes:pdf,doc,docx|max:2048',
            'file_name' => 'required|string|max:255',
        ]);

        if ($request->hasFile('policy')) {
            $files = $request->file('policy');
            $name = $request->file_name;

            foreach ($files as $file) {
                if ($file->isValid()) {
                    $filename = $file->getClientOriginalName();
                    $fileContents = file_get_contents($file);
                    $filePath = $file->store('policy_files'); // Store the file and get the path

                    PolicyFile::create([
                        'filename' => $filename,
                        'file_contents' => $fileContents,
                        'file_path' => $filePath,
                        'file_name' => $name, // Store the file name
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Files uploaded successfully.');
        }

        return redirect()->back()->with('error', 'No files selected.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred while uploading files.');
    }
}


public function downloadPolicyFile($id, $fileName)
{
    $policy = PolicyFile::findOrFail($id);

    // Ensure the file path is properly sanitized and validated
    $filePath = Storage::path($policy->file_path);

    // Generate a custom file name with the employee name and "ope"
    $fFileName = $fileName;

    return response()->file($filePath, [
        'Content-Type' => 'application/octet-stream',
        'Content-Disposition' => 'attachment; filename="' . rawurlencode($fFileName) . '"',
    ]);
}


public function deletepol($id)
{
    // Find the announcement by ID
    $pol = PolicyFile::find($id);

    if (!$pol) {
        // Handle the case where the announcement does not exist
        return redirect()->route('home')->with('error', 'Record not found.');
    }

    // Delete the announcement
    $pol->delete();

    // Redirect back to the home page with a success message
    return redirect()->back()->with('success', 'Record deleted successfully.');
}
public function empissue()
{
    $user = Auth::user();
    
    $clients = DB::table('users as u')
    ->join('assignments as a', 'u.id', '=', 'a.client_id')
    ->where('a.employee_id', '=', $user->id)
    ->select('*')
    ->get();
        // dd($clients);
    $issue = Issue::where('employee_id', $user->id)->get();
    
    foreach ($clients as $client) {
        // Fetch the employee data if client_id is not null
        $employee = DB::table('users')->where('id', $client->employee_id)->first();

        $client->client_name = $employee ? $employee->name : 'No Employee Found';
    } 
    $empl_announcements = Announcement::where('role', 'Employee')->latest()->get();
    return view('employee/issue-tracker/list', compact('user', 'clients', 'issue','empl_announcements'));
}

public function empoutofexpense()
{
     $user = Auth::user();
     $authUserId = auth()->id();

$OutOfExpense = OutOfExpense::select('out_of_expenses.*', 'users.name as client_name')
    ->join('users', 'out_of_expenses.client_id', '=', 'users.id')
    ->where('out_of_expenses.employee_id', $authUserId)
    ->get();
// dd($OutOfExpense);
     $clients = DB::table('users as u')
    ->join('assignments as a', 'u.id', '=', 'a.client_id')
    ->where('a.employee_id', '=', $user->id)
    ->select('*')
    ->get();
    
     $empl_announcements = Announcement::where('role', 'Employee')->latest()->get();
      return view('employee/outofexpense/index',compact('user','empl_announcements','OutOfExpense','clients'));
}
public function storeoutofexpense(request $request)
    {
       $validatedData = $request->validate([
        'client_id' => 'required|integer',
        'date' => 'required|date',
        'reason' => 'required|string',
        'amount' => 'required|numeric|min:0',
        'employee_id' => 'required|integer',
        'status' => 'required|string',
        'category_of_expense' => 'required|string',
        'nature_of_expense' => 'required|string',
        'supporting_documents' => 'required|string',
        'attach_supporting_documents' => 'file',
        // Add validation for file upload
    ]);
$formattedDateTime = Carbon::now()->format('Y-m-d H:i:s');
 $outOfExpense = new OutOfExpense([
        'client_id' => $request->input('client_id'),
        'date' => $request->input('date'),
        'reason' => $request->input('reason'),
        'amount' => $request->input('amount'),
        'employee_id' => $request->input('employee_id'),
        'status' => $request->input('status'),
        'category_of_expense' => $request->input('category_of_expense'),
        'nature_of_expense' => $request->input('nature_of_expense'),
        'supporting_documents' => $request->input('supporting_documents'),
        'date_of_submission_expense' => $formattedDateTime,
    ]);

    

    // Handle file upload if a file is attached
    if ($request->hasFile('attach_supporting_documents')) {
        $file = $request->file('attach_supporting_documents');
        $filename = $file->store('attachments'); // Store the file and get its path
        $outOfExpense->attach_supporting_documents = $filename; // Save the file path in the database
    }

    // Save the OutOfExpense model to the database
    $outOfExpense->save();
     $empl_announcements = Announcement::where('role', 'Employee')->latest()->get();
        // Redirect back with a success message (you can customize this)
         return redirect('/employee/outofexpense')->with([
        'success' => 'Request created successfully',
        // 'empl_announcements' => $empl_announcements,
    ]);
    }
public function adminoutofexpense()
{
     $user = Auth::user();
     $OutOfExpense = OutOfExpense::select('out_of_expenses.*', 'employee.name as employee_name', 'client.name as client_name')
    ->join('users as employee', 'employee.id', '=', 'out_of_expenses.employee_id')
    ->join('users as client', 'client.id', '=', 'out_of_expenses.client_id')
    ->get();

    // dd($OutOfExpense);
    $announcements = Announcement::latest()->get();
      return view('admin/outofexpense/index',compact('user','announcements','OutOfExpense'));
}
public function downloadOpeFile($id, $employeeName)
{
    $policy = OutOfExpense::findOrFail($id);

    // Ensure the file path is properly sanitized and validated
    $filePath = storage_path('app/' . $policy->attach_supporting_documents);

    // Generate a custom file name with the employee name and "ope"
    $customFileName = $employeeName . '_ope_file' ;

    return response()->stream(
        function () use ($filePath) {
            echo file_get_contents($filePath);
        },
        200,
        [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="' . $customFileName . '"',
        ]
    );
}


public function empupdateoutofexpense(Request $request)
{
    $validatedData = $request->validate([
       
        'emp_id' => 'required|string',
        'attach_supporting_documents' => 'file', // Add validation for the file upload
    ]);
// $formattedDateTime = Carbon::now()->format('Y-m-d H:i:s');
    $data = [
        'date' => $request->input('date'),
        'reason' => $request->input('reason'),
        'amount' => $request->input('amount'),
        'category_of_expense' => $request->input('category_of_expense'),
        'nature_of_expense' => $request->input('nature_of_expense'),
        'supporting_documents' => $request->input('supporting_documents'),
        // 'date_of_submission_expense' => $formattedDateTime,
        'created_at' => $request->input('created_at'),
       
        
    ];

    // Handle file upload
    if ($request->hasFile('attach_supporting_documents')) {
        $file = $request->file('attach_supporting_documents');
        $filePath = $file->store('uploads'); // Adjust the storage path as needed
        $data['attach_supporting_documents'] = $filePath;
    }

    // Use updateOrInsert to update or insert the record based on the 'id'
    $adminoutexp = OutOfExpense::updateOrInsert(
        ['id' => $request->input('emp_id')],
        $data
    );

    return redirect('/employee/outofexpense')->with([
        'success' => 'Request updated successfully',
    ]);
}
public function empupdatetimesheet(Request $request)
{
    $validatedData = $request->validate([
       
        'timesheettxt' => 'string',
        'spenttime' => 'string',
        'date_of_work' => 'date', // Add validation for the file upload
    ]);

    $data = [
        'timesheet_txt' => $request->input('timesheettxt'),
        'spenttime' => $request->input('spenttime'),
        'date_of_work' => $request->input('date_of_work'),
        
        
    ];

    

    // Use updateOrInsert to update or insert the record based on the 'id'
    $emptimes = TimeSheet::updateOrInsert(
        ['id' => $request->input('time_id')],
        $data
    );

    return redirect('/employee/timesheet')->with([
        'success' => 'Request updated successfully',
    ]);
}

public function updateoutofexpense(request $request)
    {
        $validatedData = $request->validate([
        'status' => 'required|string',
        // 'remarks' => 'string',
        
        'emp_id' => 'required|string',

        
        
    ]);

   $formattedDateTime = Carbon::now()->format('Y-m-d H:i:s');
    $data = [
        'status' => $request->input('status'),
        'remarks' => $request->input('remarks'),
        'created_at' => $request->input('created_at'),
        'admin_update' => $formattedDateTime,
        'updated_at' => $formattedDateTime,
        
    ];

    // Use updateOrInsert to update or insert the record based on client_id
    $adminoutexp = OutOfExpense::updateOrInsert(
        ['id' => $request->input('emp_id')],
        $data
    );
     $announcements = Announcement::latest()->get();
        // Redirect back with a success message (you can customize this)
         return redirect('/admin/outofexpense')->with([
        'success' => 'Request updated successfully',
        // 'empl_announcements' => $empl_announcements,
    ]);
    }
    public function adminissue()
    {
       
        $user = Auth::user();
        
        
        $issue = Issue::get();
        
        $announcements = Announcement::latest()->get();
        return view('admin/issue-tracker/list',compact('issue','announcements'));
    }

    public function userissue()
    {
       
        $user = Auth::user();
        // dd($user);
        
        $issue = Issue::where('client_id', $user->id)->get();
        
        $cli_announcements = Announcement::where('role', 'Client')->latest()->get();
        return view('user/issue-tracker/list',compact('issue','cli_announcements'));
    }

    public function emptimesheet()
    {
        $user = Auth::user();
        // dd($user);
        $timeSheet  = DB::table('timesheets as t')
        ->join('users as u', 'u.id', '=', 't.client_id')
        ->where('t.employee_id', '=', $user->id)
        ->select('*')
        ->get();
        $clients = DB::table('users as u')
    ->join('assignments as a', 'u.id', '=', 'a.client_id')
    ->where('a.employee_id', '=', $user->id)
    ->select('*')
    ->get();
    // $results = DB::table('assignments as a')
    // ->leftJoin('timesheets as t', 'a.client_id', '=', 't.client_id')
    // ->join('users as u', 'u.id', '=', 'a.client_id')
    // ->where('a.employee_id', $user->id)
    // ->select(
    //     'u.id as client_id',
    //     'u.name as client_name',
    //     'a.employee_id',
    //     DB::raw('DATE(t.date_of_work) as date'), // Extract the date
    //     DB::raw('GROUP_CONCAT(t.timesheet_txt) as combined_timesheet_txt'),
    //     DB::raw('COALESCE(SUM(t.spenttime), 0) as timespent'),
    //     DB::raw('MAX(t.created_at) as latest_timesheet_created_at') // Include created_at
    // )
    // ->groupBy('u.id', 'u.name', 'a.employee_id', 'date') // Group by date as well
    // ->get();
    
    // dd($results);
//   $results = DB::table('assignments as a')
//     ->join('timesheets as t', 'a.client_id', '=', 't.client_id')
//     ->join('users as u', 'u.id', '=', 'a.client_id')
//     ->where('a.employee_id', $user->id) // Filter by the logged-in user's id
//     ->whereNotNull('t.id') // Filter out records where timesheets.id is null
//     ->select(
//         'u.id as client_id',
//         'u.name as client_name',
//         'a.employee_id',
//         DB::raw('DATE(t.date_of_work) as date'), // Extract the date
//         't.timesheet_txt as timesheet_txt',
//         't.spenttime as timespent',
//         't.created_at as created_at',
//         't.id as id'
//     )
//     ->get();
$results = DB::table('timesheets as t')
    ->join('assignments as a', 'a.employee_id', '=', 't.employee_id')
    ->join('users as u1', 'u1.id', '=', 't.employee_id')
    ->leftJoin('users as u2', 'u2.id', '=', 't.client_id') // Use leftJoin instead of join
    ->where('a.employee_id', $user->id) 
    ->select(
        'a.employee_id',
        't.client_id',
        't.spenttime',
        't.timesheet_txt',
        't.id',
        't.date_of_work', // Include the date_of_work field
        DB::raw('SUM(t.spenttime) as total_spenttime'),
        DB::raw('DATE(t.created_at) as created_date'), // Extract the date from created_at
        'u1.name as employee_name',
        'u2.name as client_name'
    )
    ->groupBy('a.employee_id', 't.client_id', 't.spenttime', 't.timesheet_txt', 't.date_of_work', 't.id', 'created_date', 'u1.name', 'u2.name')
    ->orderByDesc('created_date') // Order by created_date in descending order
    ->orderBy('a.employee_id')
    ->orderBy('t.client_id')
    ->get();




    // dd($results);
    $empl_announcements = Announcement::where('role', 'Employee')->latest()->get();
        return view('employee/timesheet/index',compact('user','timeSheet','clients','results','empl_announcements'));
    }

    public function admintimesheet()
    {
       
        
     $results = DB::table('timesheets as t')
    ->join('assignments as a', 'a.employee_id', '=', 't.employee_id')
    ->join('users as u1', 'u1.id', '=', 't.employee_id')
    ->leftJoin('users as u2', 'u2.id', '=', 't.client_id')
    ->select(
        'a.employee_id',
        't.client_id',
        't.spenttime',
        't.timesheet_txt',
        't.date_of_work', // Include the date_of_work field
        DB::raw('SUM(t.spenttime) as total_spenttime'),
        DB::raw('DATE(t.created_at) as created_date'), // Extract the date from created_at
        'u1.name as employee_name',
        'u2.name as client_name'
    )
    ->groupBy('a.employee_id', 't.client_id', 't.spenttime', 't.timesheet_txt', 't.date_of_work', 'created_date', 'u1.name', 'u2.name')
    ->orderByDesc('created_date') // Order by created_date in descending order
    ->orderBy('a.employee_id')
    ->orderBy('t.client_id')
    ->get();

    $employees = User::where('role', 'Employee')->get();
        $clients = User::where('role', 'Client')->get();

    // dd($results);
    
    $announcements = Announcement::latest()->get();
        return view('admin/timesheet/index',compact('results','announcements','clients','employees'));
    }

    public function empprofile()
    {
        $user = Auth::user();
        $userInfo = UserInfo::select('user_infos.*')
    ->join('users', 'users.id', '=', 'user_infos.user_id')
    ->where('users.role', 'Employee')
    ->where('users.id', $user->id)
    ->first();
        // dd($userInfo);
        $profile = EmployeeProfile::where('employee_id', $user->id)->first();
        $empl_announcements = Announcement::where('role', 'Employee')->latest()->get();
        return view('employee/profile/index',compact('user','userInfo' ,'profile','empl_announcements'));
    }

    public function empcal()
    {
        $user = Auth::user();
        // dd($user);
       
        $clients = DB::table('users as u')
    ->join('assignments as a', 'u.id', '=', 'a.client_id')
    ->where('a.employee_id', '=', $user->id)
    ->select('*')
    ->get();
    $selectedClientId = request('client_id'); // Assuming you are using Laravel's request to get the selected client ID
    
    // Fetch events based on the selected client (if applicable)
    if ($selectedClientId) {
        $events = DB::table('events')
            ->where('client_id', $selectedClientId)
            ->select('*')
            ->get();
    } else {
        // If no client is selected, fetch all events
        $events = DB::table('events')->select('*')->get();
    }

    $calendarEvents = [];
    foreach ($events as $event) {
        $calendarEvents[] = [
            'title' => $event->title,
            'start' => $event->start,
            'description' => $event->description,
            'client_id' => $event->client_id,
            'employee_id' => $event->employee_id,
        ];
    }
    // dd($clients);
    $empl_announcements = Announcement::where('role', 'Employee')->latest()->get();
        return view('employee/calendar/index',compact('user','clients','empl_announcements','calendarEvents'));

    }

    public function usercal()
    {
        $user = Auth::user();
        // dd($user);
        $events = DB::table('events as e')
        ->join('users as u', 'u.id', '=', 'e.client_id')
        ->where('e.client_id', '=', $user->id)
        ->select('*')
        ->get();
        $calendarEvents = [];
    foreach ($events as $event) {
        $calendarEvents[] = [
            'title' => $event->title,
            'start' => $event->start,
            'description' => $event->description,
        ];
    }
    $cli_announcements = Announcement::where('role', 'Client')->latest()->get();
        return view('user/calendar/index',compact('user','calendarEvents','cli_announcements'));

    }
    // app/Http/Controllers/CalendarController.php
    public function fetchEvents(Request $request, $clientId)
    {
        // Retrieve events for the selected client from the database
        $events = Event::where('client_id', $clientId)->get();

        // Transform the events into the format expected by FullCalendar
        $formattedEvents = [];
        foreach ($events as $event) {
            $formattedEvents[] = [
                'title' => $event->title,
                'start' => $event->start_date, // Replace with your start date field
                'end' => $event->end_date, // Replace with your end date field
                // Add other event properties as needed
            ];
        }

        // Return the events in JSON format
        return response()->json($formattedEvents);
    }


    public function admincalendar()
    {
        $employees = User::where('role', 'Employee')->get();
        $clients = User::where('role', 'Client')->get();
        $selectedClientId = request('client_id'); // Assuming you are using Laravel's request to get the selected client ID
    
        // Fetch events based on the selected client (if applicable)
        if ($selectedClientId) {
            $events = DB::table('events')
                ->where('client_id', $selectedClientId)
                ->select('*')
                ->get();
        } else {
            // If no client is selected, fetch all events
            $events = DB::table('events')->select('*')->get();
        }
    
        $calendarEvents = [];
        foreach ($events as $event) {
            $calendarEvents[] = [
                'title' => $event->title,
                'start' => $event->start,
                'description' => $event->description,
                'client_id' => $event->client_id,
                'employee_id' => $event->employee_id,
            ];
        }
        $announcements = Announcement::latest()->get();
        return view('admin/calendar/index', compact('clients', 'employees', 'calendarEvents','announcements'));
    }
    

    public function userpassword()
    {
        $user = Auth::user();
        // dd($user);
       
        $cli_announcements = Announcement::where('role', 'Client')->latest()->get();
        return view('user/change_pass',compact('user','cli_announcements'));

    }

    public function updateuserpassword(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
    
        // Get the current user
        $user = auth()->user();
    
        // Check if the provided old password matches the user's current password
        if (!Hash::check($request->oldpassword, $user->password)) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }
    
        // Update the user's password
        $user->update([
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->back()->with('success', 'Password updated successfully.');
    }

    public function empclient()
    {
        $user = Auth::user();
        // dd($user);
        // $clients = Assignment::where('employee_id', $user->id)->get();


               
        $employeeId = $user->id;
        // dd($employeeId);

        // Retrieve the employee's profile
        // $employeeProfile = EmployeeProfile::where('employee_id', $employeeId)->first();
       $employeeProfile = DB::table('user_infos as u')
            ->join('assignments as a', 'u.user_id', '=', 'a.client_id')
            ->where('a.employee_id', '=', $employeeId)
            ->select('*')
            ->get();
    
        // dd($employeeProfile);
        // Retrieve the employee's assignments along with client and client details
//         $assignments = Assignment::where('employee_id', $employeeId)->with(['client', 'employee'])->get();
        
//         // Retrieve the user details (if needed)
//         $user = User::where('id', $employeeId)->get();
        
//         // You can access the data like this:
//         if ($employeeProfile) {
//             // Access employee profile data
//             $employeeName = $employeeProfile->name;
//             $employeeEmail = $employeeProfile->email;
//             // ... other profile fields
//         }
        
//         if ($assignments) {
//     foreach ($assignments as $assignment) {
//         // Access assignment data
//         $clientName = $assignment->client->name ?? ''; // Default to 'N/A' if client is null
//         $employeeName = $assignment->employee->name ?? ''; // Default to 'N/A' if employee is null
//         // ... other assignment data
//     }
// }

        
       
        $empl_announcements = Announcement::where('role', 'Employee')->latest()->get();
        
        return view('employee/client/list',compact('user', 'employeeProfile','empl_announcements'));
    }
    
    public function updateclientprofile(Request $request)
{
    // dd($request);
    $employeeId = $request->input('client_id');
    $user = User::find($employeeId);

    if (!$user) {
        return redirect()->back()->with('error', 'Client not found.');
    }

    // Clear previous files and handle new file uploads
    $this->handleFileUploadsnew1($request, $user);

    // Update the User model
    $user->fill($request->except('profile_picture', 'gst_document', 'pan_document', 'tan_document', 'address_proof_document'));
   
    $user->save();

    // Update the UserInfo model
    
    $userInfo = UserInfo::where('user_id', $employeeId)->first();
    if (!$userInfo) {
        $userInfo = new UserInfo();
        $userInfo->user_id = $user->id;
    }
    $this->handleFileUploadsnew1($request, $userInfo);
    $userInfo->fill($request->all());
    
    $userInfo->save();

    return redirect()->back()->with('success', 'Client profile updated successfully');
}
private function handleFileUploadsnew1(Request $request, $model)
{
    // List of file input names
    $fileInputs = [
        'profile_picture',
        'gst_document',
        'pan_document',
        'tan_document',
        'address_proof_document',
    ];

    foreach ($fileInputs as $fileInput) {
        if ($request->hasFile($fileInput)) {
            // Check if there is a previous file to delete
            if ($model->$fileInput) {
                Storage::disk('public')->delete($model->$fileInput);
            }

            // Handle the new file upload
            $file = $request->file($fileInput);
            $fileName = time() . '_' . $fileInput . '.' . $file->extension();
            Storage::disk('public')->put($fileName, File::get($file));
            $model->$fileInput = $fileName;
        }
    }
}

    

public function storeTimeSheet(Request $request)
{
    $request->validate([
        
        'timesheettxt' => 'string',
        'spenttime' => 'string',
        'date_of_work' => 'date',
       
    ]);

    

    // Create and save the timesheet record
    $timeSheet = new TimeSheet([
        'client_id' => $request->input('client_id'),
        'non_client' => $request->input('non_client'),
        'spenttime' => $request->input('spenttime'),
        'timesheet_txt' => $request->input('timesheettxt'),
        'employee_id' => $request->input('employee_id'),
        'date_of_work' => $request->input('date_of_work'),
    ]);

    $timeSheet->save();

    return redirect()->back()->with('success', 'Timesheet updated/created successfully');
}
    
    
    
    public function employeessview()
    {
        $employees = $employeeInfo = DB::table('user_infos as ui')
    ->join('users as u', 'u.id', '=', 'ui.user_id')
    ->where('u.role', 'employee')
    ->select('ui.*', 'u.profile_picture as profile_picture')
    ->get();
  
        // dd($employees);
    //   $clients = UserInfo::where('role', 'Client')
    // ->whereNotIn('user_id', function ($query) {
    //     $query->select('client_id','employee_id')
    //         ->from('assignments');
    // })
    // ->get();
  $clients = UserInfo::where('role', 'Client')
    ->whereNotIn('user_id', function ($query) {
        $query->select('client_id')
            ->from('assignments')
            ->whereColumn('user_infos.user_id', 'assignments.employee_id');
    })
    ->orderBy('name') // Add this line to order by name
    ->get();





    



    
    // dd($clients);
    
    $assignments = DB::table('assignments')
    ->join('users as clients', 'clients.id', '=', 'assignments.client_id')
    ->join('users as employees', 'employees.id', '=', 'assignments.employee_id')
    ->select('assignments.*', 'clients.name as client_name', 'employees.name as employee_name')
    ->get();

        return view('admin/employee/list',compact('employees','clients','assignments'));
    }

    public function adminannouncement()
    { 
        $clientsannouncements = Announcement::where('role','Client')->latest()->get();
        // dd($clientsannouncements);
        $employeesannouncements = Announcement::where('role','Employee')->latest()->get();
        $announcements = Announcement::latest()->get();;
        return view('admin/announcement/index',compact('clientsannouncements','employeesannouncements','announcements'));
    }

    public function storeannouncementofemployees(request $request)
    {
        $data = $request->all();
        Validator::make($data, [
            
            'role' => ['required', 'string', 'max:255'],
            'announcements_for_employee' => ['required', 'string', 'max:255'],
           
        ]);
        Announcement::create([
            'role' => $data['role'],
            'announcements_for_employee' => $data['announcements_for_employee'],
            
        ]);
        if ($request->ajax()) {
            return response()->json(['message' => 'Annoucement created successfully']);
        }
    
        // Redirect with a success message
        return redirect('/admin/announcement')->with('success', 'Annoucement created successfully');
    }

    public function storeannouncementofclients(request $request)
    {
        $data = $request->all();
        Validator::make($data, [
            
            'role' => ['required', 'string', 'max:255'],
            'announcements_for_clients' => ['required', 'string', 'max:255'],
           
        ]);
        Announcement::create([
            'role' => $data['role'],
            'announcements_for_clients' => $data['announcements_for_clients'],
            
        ]);
        if ($request->ajax()) {
            return response()->json(['message' => 'Annoucement created successfully']);
        }
    
        // Redirect with a success message
        return redirect('/admin/announcement')->with('success', 'Annoucement created successfully');
    }
   
    
    public function storeclients(request $request)
    {
        // dd($request);
        $data = $request->all();
        $validator = Validator::make($data, [
            'phone' => ['required', 'string', 'min:10', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'plan_type' => ['required', 'string', 'max:255'],
            // 'tenure_start_date' => ['required', 'string', 'max:255'],
            // 'tenure_end_date' => ['required', 'string', 'max:255'],
            'brand_name' => ['required', 'string', 'max:255'],
            'client_correspondence_address' => ['required', 'string', 'max:255'],
            'client_registered_office_address' => ['required', 'string', 'max:255'],
            'authorised_signatory_name' => ['required', 'string', 'max:255'],
            // 'authorised_signatory_contact_no' => ['required', 'string', 'max:255'],
            // 'authorised_signatory_email_id' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $existingUser = User::where('email', $data['email'])->first();

        if ($existingUser) {
            // User with the same email already exists, return an error message for AJAX requests
            if ($request->ajax()) {
                return response()->json(['error' => 'User with this email already exists.'], 422);
            } else {
                // Redirect with an error message for regular form submissions
                return redirect()->back()->with('error', 'User with this email already exists.')->withInput();
            }
        }
        try {
            $user = User::create([
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'name' => $data['name'],
            'plan_type' => $data['plan_type'],
            // 'tenure_start_date' => $data['tenure_start_date'],
            // 'tenure_end_date' => $data['tenure_end_date'],

            'brand_name' => $data['brand_name'],
            'client_correspondence_address' => $data['client_correspondence_address'],
            'client_registered_office_address' => $data['client_registered_office_address'],
            'authorised_signatory_name' => $data['authorised_signatory_name'],
            // 'authorised_signatory_contact_no' => $data['authorised_signatory_contact_no'],
            // 'authorised_signatory_email_id' => $data['authorised_signatory_email_id'],
        ]);
        UserInfo::create([
            'user_id' => $user->id,
            
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => $data['role'],
            'name' => $data['name'],
            'plan_type' => $data['plan_type'],
            // 'tenure_start_date' => $data['tenure_start_date'],
            // 'tenure_end_date' => $data['tenure_end_date'],

            'brand_name' => $data['brand_name'],
            'client_correspondence_address' => $data['client_correspondence_address'],
            'client_registered_office_address' => $data['client_registered_office_address'],
            'authorised_signatory_name' => $data['authorised_signatory_name'],
            // 'authorised_signatory_contact_no' => $data['authorised_signatory_contact_no'],
            // 'authorised_signatory_email_id' => $data['authorised_signatory_email_id'],
            
            
        ]);
        if ($request->ajax()) {
            return response()->json(['message' => 'User created successfully']);
        }
    
        // Redirect with a success message
        return redirect('/admin/clients')->with('success', 'User created successfully');
    }
    catch (\Illuminate\Database\QueryException $e) {
        $errorMessage = 'An error occurred while creating the employee.';
        if ($request->ajax()) {
            return response()->json(['error' => $errorMessage], 422);
        } else {
            return redirect()->back()->with('error', $errorMessage)->withInput();
        }
    }
}
public function deleteAnnouncement($id)
{
    // Find the announcement by ID
    $announcement = Announcement::find($id);

    if (!$announcement) {
        // Handle the case where the announcement does not exist
        return redirect()->route('home')->with('error', 'Announcement not found.');
    }

    // Delete the announcement
    $announcement->delete();

    // Redirect back to the home page with a success message
    return redirect()->back()->with('success', 'Announcement deleted successfully.');
}
public function deleteAnnouncementd($id)
{
    // Find the announcement by ID
    $announcement = Announcement::find($id);

    if (!$announcement) {
        // Handle the case where the announcement does not exist
        return redirect()->route('home')->with('error', 'Announcement not found.');
    }

    // Delete the announcement
    $announcement->delete();

    // Redirect back to the home page with a success message
    return redirect()->back()->with('success', 'Announcement deleted successfully.');
}
public function clientdel($id)
{
    // dd($id);
   $user = User::with('userInfo')->find($id);

if ($user) {
    // Delete the user_info record
    $user->userInfo->delete();
    
    // Delete the user record
    $user->delete();
    
    
}

    // Redirect back to the home page with a success message
    return redirect()->back()->with('success', 'Announcement deleted successfully.');
}
public function storeemployee(request $request)
{ 
    // dd($request);
    $email = $request->email;
    $passwordd = $request->password;
//     $validator = Validator::make($request->all(), [
//         'phone' => ['string', 'min:10', 'max:10'],
//         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//         'password' => ['required', 'string', 'min:8', 'confirmed'],
//         'role' => ['required', 'string', 'max:255'],
//         'name' => ['string', 'max:255'],
//         'personal_email_id' => ['string', 'max:255'],
//         'designation' => ['string', 'max:255'],
//         'department' => ['string', 'max:255'],
//         'joining_date' => ['string', 'max:255'],
//         'immediate_reporting_manager' => ['string', 'max:255'],
//         'correspondence_address_employee' => ['string'],
//         'permanent_address_employee' => ['string'],
//         'aadhar_number_employee' => ['string'],
//     ]);
// dd($validator);
//     // Check for validation errors
//     if ($validator->fails()) {
//         // Validation failed, return validation errors to the front end
//         if ($request->ajax()) {
//             return response()->json(['errors' => $validator->errors()], 422);
//         }
//         return redirect()->back()->withErrors($validator)->withInput();
//     }

//     // Check if a user with the same email already exists
//     $existingUser = User::where('email', $request->email)->first();

//     if ($existingUser) {
//         // User with the same email already exists, return an error message for AJAX requests
//         if ($request->ajax()) {
//             return response()->json(['error' => 'User with this email already exists.'], 422);
//         } else {
//             // Redirect with an error message for regular form submissions
//             return redirect()->back()->with('error', 'User with this email already exists.')->withInput();
//         }
//     }

    // Create a new user record
    $user = User::create([
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
        'name' => $request->name,
        'personal_email_id' => $request->personal_email_id,
        'designation' => $request->designation,
        'department' => $request->department,
        'joining_date' => $request->joining_date,
        'immediate_reporting_manager' => $request->immediate_reporting_manager,
        'correspondence_address_employee' => $request->correspondence_address_employee,
        'permanent_address_employee' => $request->permanent_address_employee,
        'aadhar_number_employee' => $request->aadhar_number_employee,
    ]);

    // Create a corresponding user_info record (assuming there's a relationship set up)
    $userInfo = new UserInfo([
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => $request->password,
        'role' => $request->role,
        'name' => $request->name,
        'personal_email_id' => $request->personal_email_id,
        'designation' => $request->designation,
        'department' => $request->department,
        'joining_date' => $request->joining_date,
        'immediate_reporting_manager' => $request->immediate_reporting_manager,
        'correspondence_address_employee' => $request->correspondence_address_employee,
        'permanent_address_employee' => $request->permanent_address_employee,
        'aadhar_number_employee' => $request->aadhar_number_employee,
    ]);

    // Save the user_info record
    $user->userInfo()->save($userInfo);

    // You can send an email notification here if needed

    if ($request->ajax()) {
        return response()->json(['message' => 'Employee created successfully']);
    }

    // Retrieve announcements (assuming there's an Announcement model)
    $announcements = Announcement::latest()->get();

    // Redirect with a success message
    return redirect('/admin/employees')->with([
        'success' => 'Employee created successfully',
        'announcements' => $announcements,
    ]);


}








// public function deleteUser($id)
// {
    
//     try {
//         // Find the user by ID
//         $user = User::find($id);

//         if (!$user) {
//             return response()->json(['success' => false, 'message' => 'User not found.']);
//         }

//         // Delete related records in other tables
//         $user->assignments()->delete();
//         $user->clientProfile()->delete();
//         $user->employeeProfile()->delete();
//         $user->timesheets()->delete();
//         $user->issues()->delete();
//         $user->userInfo()->delete();

//         // Delete the user record itself
//         $user->delete();

//         return response()->json(['success' => true, 'message' => 'User and related records deleted successfully.']);
//     } catch (\Exception $e) {
//         return response()->json(['success' => false, 'message' => 'An error occurred while deleting the user.']);
//     }
// }
public function deleteemp($id)
{
    // Find the user by ID
    $user = User::find($id);

    if (!$user) {
        return redirect()->back()->with('error', 'Employee not found.');
    }

    // Delete the user record
    $user->delete();

    // Also delete the related user_info record
    UserInfo::where('user_id', $id)->delete();

    return redirect()->back()->with('success', 'Employee deleted successfully.');
}
public function deletecli($id)
{
    // Find the user by ID
    $user = User::find($id);

    if (!$user) {
        return redirect()->back()->with('error', 'Client not found.');
    }

    // Delete the user record
    $user->delete();

    // Also delete the related user_info record
    UserInfo::where('user_id', $id)->delete();

    return redirect()->back()->with('success', 'Client deleted successfully.');
}

public function deletedsc($id)
{
    // Find the user by ID
    $user = DataModel::find($id);

    if (!$user) {
        return redirect()->back()->with('error', 'Record not found.');
    }

    // Delete the user record
    $user->delete();

    

    return redirect()->back()->with('success', 'Record deleted successfully.');
}
public function deleteope($id)
{
    // Find the user by ID
    $user = OutOfExpense::find($id);

    if (!$user) {
        return redirect()->back()->with('error', 'Record not found.');
    }

    // Delete the user record
    $user->delete();

    

    return redirect()->back()->with('success', 'Record deleted successfully.');
}
public function deletetime($id)
{
    // Find the user by ID
    $user = TimeSheet::find($id);

    if (!$user) {
        return redirect()->back()->with('error', 'Record not found.');
    }

    // Delete the user record
    $user->delete();

    

    return redirect()->back()->with('success', 'Record deleted successfully.');
}
public function sendNotification(Request $request)
{
    // Retrieve the user ID from the AJAX request
    $userId = $request->input('userId');
    $mess = $request->input('mess');
    $notification = new Notification();
    $notification->user_id = $userId;
    $notification->notification = $mess;
    

    $notification->save();
    
    return redirect()->back()->with('success', 'notification send successfully');
}

    public function userclientsview()
    {
        return view('user/dashboard/index');
    }

   

    public function updateemployeeprofile(Request $request)
{
    $employeeId = $request->input('employee_id');
    $user = User::find($employeeId);

    if (!$user) {
        return redirect()->back()->with('error', 'Employee not found.');
    }

    // Clear previous files and handle new file uploads
    $this->handleFileUploads($request, $user);

    // Update the User model
    $user->fill($request->except('profile_picture', 'appointment_letter', 'increment_letter', 'kra_docs', 'policy_manuals'));
    $user->password = Hash::make($request->input('password'));
    $user->save();

    // Update the UserInfo model
    
    $userInfo = UserInfo::where('user_id', $user->id)->first();
    if (!$userInfo) {
        $userInfo = new UserInfo();
        $userInfo->user_id = $user->id;
    }
    $this->handleFileUploads($request, $userInfo);
    $userInfo->fill($request->all());
    $userInfo->password = $request->input('password');
    $userInfo->save();

    return redirect()->back()->with('success', 'Employee profile updated successfully');
}

    public function updatesingleemployeeprofile(Request $request)
{
    // dd($request);
    $employeeId = $request->input('employee_id');
    $user = User::find($employeeId);

    if (!$user) {
        return redirect()->back()->with('error', 'Employee not found.');
    }

    // Clear previous files and handle new file uploads
    $this->handleFileUploadsnew($request, $user);

    // Update the User model
    $user->fill($request->except('profile_picture', 'appointment_letter', 'increment_letter', 'kra_docs', 'policy_manuals'));
    $user->password = Hash::make($request->input('password'));
    $user->save();

    // Update the UserInfo model
    
    $userInfo = UserInfo::where('user_id', $user->id)->first();
    if (!$userInfo) {
        $userInfo = new UserInfo();
        $userInfo->user_id = $user->id;
    }
    $this->handleFileUploadsnew($request, $userInfo);
    $userInfo->fill($request->all());
    $userInfo->password = $request->input('password');
    $userInfo->save();

    return redirect()->back()->with('success', 'Employee profile updated successfully');
}
private function handleFileUploadsnew(Request $request, $model)
{
    // List of file input names
    $fileInputs = [
        'profile_picture',
        'appointment_letter',
        'increment_letter',
        'kra_docs',
        'policy_manuals',
    ];

    foreach ($fileInputs as $fileInput) {
        if ($request->hasFile($fileInput)) {
            // Check if there is a previous file to delete
            if ($model->$fileInput) {
                Storage::disk('public')->delete($model->$fileInput);
            }

            // Handle the new file upload
            $file = $request->file($fileInput);
            $fileName = time() . '_' . $fileInput . '.' . $file->extension();
            Storage::disk('public')->put($fileName, File::get($file));
            $model->$fileInput = $fileName;
        }
    }
}
private function handleFileUploads(Request $request, $model)
{
    // List of file input names
    $fileInputs = [
        'profile_picture',
        'appointment_letter',
        'increment_letter',
        'kra_docs',
        'policy_manuals',
    ];

    foreach ($fileInputs as $fileInput) {
        if ($request->hasFile($fileInput)) {
            // Check if there is a previous file to delete
            if ($model->$fileInput) {
                Storage::disk('public')->delete($model->$fileInput);
            }

            // Handle the new file upload
            $file = $request->file($fileInput);
            $fileName = time() . '_' . $fileInput . '.' . $file->extension();
            Storage::disk('public')->put($fileName, File::get($file));
            $model->$fileInput = $fileName;
        }
    }
}


    public function updateclientprofiles(Request $request)
    {
    
        $clientid = $request->input('client_id');
        $clientProfile = User::where('id', $clientid)->first();
       
      
        
        
        
        $users=  User::updateOrCreate(
            ['id' => $clientid],
            ['name' => $request->input('name'),
                'phone' => $request->input('phone'),
                
                'password' => Hash::make($request->input('password')),
                'brand_name' => $request->input('brand_name'),
               
              
                'client_correspondence_address' => $request->input('client_correspondence_address'),
                'client_registered_office_address' => $request->input('client_registered_office_address'),
                'plan_type' => $request->input('plan_type'),
                
                'authorised_signatory_name' => $request->input('authorised_signatory_name'),
                
               
            
        ]);
        
         UserInfo::updateOrCreate(
           ['user_id' => $clientid],
            ['name' => $request->input('name'),
                'phone' => $request->input('phone'),
                
                'password' => $request->input('password'),
                'brand_name' => $request->input('brand_name'),
               
              
                'client_correspondence_address' => $request->input('client_correspondence_address'),
                'client_registered_office_address' => $request->input('client_registered_office_address'),
                'plan_type' => $request->input('plan_type'),
                
                'authorised_signatory_name' => $request->input('authorised_signatory_name'),
                
               
            
        ]);
   
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->extension();
            Storage::disk('public')->put($imageName, File::get($image));
    
           
            $users->profile_picture = $imageName;
            $users->save();
        }
        
        return redirect()->back()->with('success', 'Client profile updated/created successfully');
    }
    public function updatedsc(Request $request)
    {
  $validatedData = $request->validate([
        // Add validation rules for other fields if needed
        'dsc_id' => 'required',
    ]);

    $data = [
        'Nonclient' => $request->input('Nonclient'),
        'directorname' => $request->input('directorname'),
        'din_number' => $request->input('din_number'),
        'valid_from' => $request->input('valid_from'),
        'valid_till' => $request->input('valid_till'),
        'expiry_status' => $request->input('expiry_status'),
        'renewal' => $request->input('renewal'),
        'mobile_no' => $request->input('mobile_no'),
        'email' => $request->input('email'),
        'father_name' => $request->input('father_name'),
        'dsc_location' => $request->input('dsc_location'),
    ];

    // Check if a file was uploaded and update the corresponding DataModel record
    if ($request->hasFile('pan_file')) {
        $panFilePath = $request->file('pan_file')->store('uploads');
        $data['pan_file_path'] = $panFilePath;
    }

    if ($request->hasFile('aadhar_file')) {
        $aadharFilePath = $request->file('aadhar_file')->store('uploads');
        $data['aadhar_file_path'] = $aadharFilePath;
    }

    if ($request->hasFile('profile_file')) {
        $profileFilePath = $request->file('profile_file')->store('uploads');
        $data['profile_file_path'] = $profileFilePath;
    }

    // Use updateOrInsert to update or insert the record based on the 'dsc_id'
    $dataModel = DataModel::updateOrInsert(
        ['id' => $request->input('dsc_id')],
        $data
    );

     
   
        
        return redirect()->back()->with('success', 'DSC updated/created successfully');
    }
    public function issueClient(Request $request)
{
    $validatedData = $request->validate([
        'client_id' => 'required',
        'issue_date' => 'required|date',
        'responsibility' => 'required|string',
        'area' => 'required|string',
        'particulars' => 'required|string',
        'status' => 'required|string',
        'remarks' => 'nullable|string',
        'employee_id' => 'required',
        'employee_name' => 'required',
        'client_name' => 'required',
    ]);

    Issue::create($validatedData);

    return redirect()->back()->with('success', 'Issue updated/created successfully');
}


public function eventsstore(Request $request)
{

    // dd($request->event_description);
    
    $data = $request->validate([
        'client_id' => 'required',
        'employee_id' => 'required',
        'compliances' => 'required',
        'event_start' => 'required|date',
        
        'event_description' => 'nullable',
       
        // Add validation rules for other fields
    ]);

    Event::create([
        'title' => $request->compliances,
        'start' => $request->event_start,
       
        'description' => $request->event_description,
        'client_id' => $request->client_id,
        'employee_id' => $request->employee_id,
        // Add other fields as needed
    ]);
    return redirect()->back()->with('success', 'Event updated/created successfully');
}
// public function event(Request $request)
// {
//     $clientId = $request->input('client_id');
//     $events = Event::select('events.*')
//         ->join('users as u', 'u.id', '=', 'events.employee_id')
//         ->where('u.client_id', $clientId) // Assuming there's a client_id column in your users table
//         ->get();

//     return response()->json($events);
// }
}
