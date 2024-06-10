<?php
function calculateHours($attendanceRecords) {
    // Initialize a Total Hours Counter
    $totalHours = 0;

    // Iterate Over Attendance Records
    foreach ($attendanceRecords as $record) {
        // Sum the Hours Rendered
        $totalHours += $record["hours_rendered"];
    }

    // Return the total hours rendered
    return $totalHours;
}

function hoursLeft($totalHours, $mandatoryHours = 600) {
    // Calculate the remaining hours to complete the internship
    return max(0, $mandatoryHours - $totalHours);
}

function main() {
    // Sample attendance records
    $attendanceRecords = [
        ["date" => "2023-05-01", "time_in" => "09:00", "time_out" => "17:00", "hours_rendered" => 8],
        ["date" => "2023-05-02", "time_in" => "09:15", "time_out" => "17:15", "hours_rendered" => 8],
        ["date" => "2023-05-03", "time_in" => "09:30", "time_out" => "16:30", "hours_rendered" => 7],
        ["date" => "2023-05-04", "time_in" => "09:00", "time_out" => "18:00", "hours_rendered" => 9],
        ["date" => "2023-05-05", "time_in" => "09:00", "time_out" => "17:00", "hours_rendered" => 8],
    ];

    // Calculate total hours rendered
    $totalHoursRendered = calculateHours($attendanceRecords);

    // Calculate remaining hours to complete
    $remainingHours = hoursLeft($totalHoursRendered);

    // Output results
    echo "Total hours rendered: " . $totalHoursRendered . "\n";
    echo "Hours left to complete: " . $remainingHours . "\n";
   
}

// Run the main function
main();
?>