

// note editor
var note = [
    "Type Your Note",
]


// activity editor
var activity = [
    "Type your description...",
]


// activity editor
var task = [
    "Type your description...",
]

// schedule editor
var schedule = [
    "Enter your schedule description...",
]


var simplemde = new SimpleMDE({element: $("#note")[0], toolbar: ["bold", "italic", "heading", "|", "quote", "unordered-list", "ordered-list", "|", "link", "image", "|", "guide"]});

var activitybox = new SimpleMDE({element: $("#activity_log")[0], toolbar: ["bold", "italic", "heading", "|", "quote", "unordered-list", "ordered-list", "|", "link", "image", "|", "guide"]});

var schedulebox = new SimpleMDE({element: $("#schedule")[0], toolbar: ["bold", "italic", "heading", "|", "quote", "unordered-list", "ordered-list", "|", "link", "image", "|", "guide"]});

var taskbox = new SimpleMDE({element: $("#tasks")[0], toolbar: ["bold", "italic", "heading", "|", "quote", "unordered-list", "ordered-list", "|", "link", "image", "|", "guide"]});

$(document).ready(function() {

    writeSample();

    simplemde.codemirror.on("change", function(){
        $("#note").val(simplemde.value());
        var renderedHTML = simplemde.options.previewRender(simplemde.value());
        $("#write_here").html(renderedHTML);
        $("#write_here").css("height", $(".row").height() +  "px" );
    });

    activitybox.codemirror.on("change", function(){
        $("#activity_log").val(activitybox.value());
        var renderedHTML = activitybox.options.previewRender(activitybox.value());
        $("#write_here").html(renderedHTML);
        $("#write_here").css("height", $(".row").height() +  "px" );
    });

    taskbox.codemirror.on("change", function(){
        $("#tasks").val(taskbox.value());
        var renderedHTML = taskbox.options.previewRender(taskbox.value());
        $("#write_here").html(renderedHTML);
        $("#write_here").css("height", $(".row").height() +  "px" );
    });

    schedulebox.codemirror.on("change", function(){
        $("#schedule").val(schedulebox.value());
        var renderedHTML = schedulebox.options.previewRender(schedulebox.value());
        $("#write_here").html(renderedHTML);
        $("#write_here").css("height", $(".row").height() +  "px" );
    });


});

function writeSample() {
    var s = "";
    s = getSample();
    simplemde.value(s);


    var t = "";
    t = getActivity();
    activitybox.value(t);

    var u = "";
    u = getTask();
    taskbox.value(u);

    var v = "";
    v = getSchedule();
    schedulebox.value(v);
}

function getSample() {
    var s = "";
    $.each(note, function( index, value ) {
        //alert( index + ": " + value );
        s = s + value + "\n\r";
    });
    return s;
}

function getActivity() {
    var s = "";
    $.each(activity, function( index, value ) {
        //alert( index + ": " + value );
        s = s + value + "\n\r";
    });
    return s;
}

function getTask() {
    var s = "";
    $.each(task, function( index, value ) {
        //alert( index + ": " + value );
        s = s + value + "\n\r";
    });
    return s;
}

function getSchedule() {
    var s = "";
    $.each(schedule, function( index, value ) {
        //alert( index + ": " + value );
        s = s + value + "\n\r";
    });
    return s;
}
