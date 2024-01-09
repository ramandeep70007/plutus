 @php

 $menu = [
            "menus" => [
                [
                    "name" => "Overview",
                    "url" => "/admin/hrm/dashboard",
                    "submenus" => []
                ],
                [
                    "name" => "People",
                    "url" => "/admin/hrm/peoples",
                    "submenus" => []
                ],
                [
                    "name" => "Payroll",
                    "submenus" =>  [
                        [
                            "name" => "Dashboard",
                            "url" => "/admin/payroll/dashboard"
                        ],
                        [
                            "name" => "Pay Calendar",
                            "url" => "/admin/payroll/pay_calendar"
                        ],
                        [
                            "name" => "Pay Run List",
                            "url" => "/admin/payroll/pay_run_list"
                        ],
                        [
                            "name" => "Bulk pay itme edit",
                            "url" => "/admin/payroll/bulk_pay_edit"
                        ],
                        [
                            "name" => "Reports",
                            "url" => "/admin/payroll/reports"
                        ],
                        [
                            "name" => "Settings",
                            "url" => "/admin/payroll/settings"
                        ]
                    ]
                ],
                [
                    "name" => "Leave",
                    "submenus" => [
                        [
                            "name" => "Types",
                            "url" => "/admin/leave/types"
                        ],
                        [
                            "name" => "Requests",
                            "url" => "/admin/leave/requests"
                        ],
                        [
                            "name" => "Leave Entitlements",
                            "url" => "/admin/leave/leave_entitlements"
                        ],
                        [
                            "name" => "Holidays",
                            "url" => "/admin/leave/holidays"
                        ],
                        [
                            "name" => "Policies",
                            "url" => "/admin/leave/policies"
                        ],
                        [
                            "name" => "Calendar",
                            "url" => "/admin/leave/calendar"
                        ],
                        [
                            "name" => "Unpaid Leaves",
                            "url" => "/admin/leave/unpaid_leaves"
                        ],
                        [
                            "name" => "Forward Leaves",
                            "url" => "/admin/leave/forward_leaves"
                        ]
                    ]
                 ],
                 [
                    "name" => "Attendance",
                    "submenus" => [
                        [
                            "name" => "Attendance",
                            "url" => "/admin/attendance/"
                        ],
                        [
                            "name" => "Shifts",
                            "url" => "/admin/attendance/shifts"
                        ],
                        [
                            "name" => "Tools",
                            "url" => "/admin/attendance/tools"
                        ],
                        [
                            "name" => "Assign Bulk Shift",
                            "url" => "/admin/attendance/bulk_shift"
                        ],
                        [
                            "name" => "Settings",
                            "url" => "/admin/attendance/settings"
                        ]
                    ]
                 ],
                 [
                    "name" => "Assets",
                    "submenus" => [
                         [
                            "name" => "Types",
                            "url" => "/admin/asset_type/manage"
                        ], [
                            "name" => "Assets",
                            "url" => "/admin/assets"
                        ],
                        [
                            "name" => "Allotments",
                            "url" => "/admin/asset/allotments"
                        ],
                        [
                            "name" => "Requests",
                            "url" => "/admin//assets/requests"
                        ]
                    ]

                 ],
                 [
                    "name" => "Documents",
                    "url" => "/admin/hrm/documents",
                    "submenus" => []
                ],
                [
                    "name" => "Training",
                    "url" => "/admin/hrm/training",
                    "submenus" => []
                ],
                [
                    "name" => "Recruitment",
                    "submenus" => [
                        [
                            "name" => "Job Opening",
                            "url" => "/admin/recruitment/job_opening"
                        ],
                        [
                            "name" => "Add Opening",
                            "url" => "/admin/recruitment/add_opening"
                        ],
                        [
                            "name" => "Question Sets",
                            "url" => "/admin/recruitment/question_sets"
                        ],
                        [
                            "name" => "Candidates",
                            "url" => "/admin/recruitment/candidates"
                        ],
                        [
                            "name" => "Add Candidate",
                            "url" => "/admin/recruitment/add_candidate"
                        ],
                        [
                            "name" => "Calendar",
                            "url" => "/admin/recruitment/calendar"
                        ],
                        [
                            "name" => "Reports",
                            "url" => "/admin/recruitment/reports"
                        ]
                    ]
                 ],
                 [
                    "name" => "Reports",
                    "submenus" => [
                        [
                            "name" => "Age Profile",
                            "url" => "/admin/reports/age_profile"
                        ],
                        [
                            "name" => "Salary History",
                            "url" => "/admin/reports/salary_history"
                        ],
                        [
                            "name" => "Gender Profile",
                            "url" => "/admin/reports/gender_profile"
                        ],
                        [
                            "name" => "Years Of Service",
                            "url" => "/admin/reports/years_of_service"
                        ],
                        [
                            "name" => "Head Count",
                            "url" => "/admin/reports/head_count"
                        ],
                        [
                            "name" => "Leaves",
                            "url" => "/admin/reports/leaves"
                        ],
                        [
                            "name" => "Assets",
                            "url" => "/admin/reports/assets"
                        ],
                        [
                            "name" => "Attendance (Date Based)",
                            "url" => "/admin/reports/attendance_date"
                        ],
                        [
                            "name" => "Attendance (Employee Based)",
                            "url" => "/admin/reports/attendance_employee"
                        ]

                    ]
                 ],
                 [
                    "name" => "Help",
                    "url" => "/admin/hrm/help",
                    "submenus" => []
                ],

            ]
        ];

@endphp


