<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$con = mysqli_connect('srv1328.hstgr.io', 'u629694569_vcpkacin_web', 'Kakatiya@1243', 'u629694569_vcpkacin_web');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to fetch tab data
function getTabData($tabId) {
    global $con;
    
    switch($tabId) {
        case 'overview':
            $query = "SELECT description FROM dep_about WHERE department_name = 'CSE'";
            break;
        case 'vision':
            $query = "SELECT vision, mission FROM dep_about WHERE department_name = 'CSE'";
            break;
        case 'faculty':
            $query = "SELECT * FROM dep_faculty_profile WHERE department = 'CSE'";
            break;
        case 'students':
            $query = "SELECT * FROM student_events2 WHERE department = 'CSE'";
            break;
        default:
            return ['error' => 'Invalid tab'];
    }
    
    $result = mysqli_query($con, $query);
    if (!$result) {
        return ['error' => mysqli_error($con)];
    }
    
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    return $data;
}

// Handle AJAX request
if (isset($_GET['tab'])) {
    header('Content-Type: application/json');
    echo json_encode(getTabData($_GET['tab']));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department - CSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .loading {
            display: none;
            text-align: center;
            padding: 20px;
        }
        .loading.active {
            display: block;
        }
        .nav-link.active {
            background-color: #0d6efd;
            color: white !important;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" role="tablist">
                <button class="nav-link active" data-tab="overview">Overview</button>
                <button class="nav-link" data-tab="vision">Vision & Mission</button>
                <button class="nav-link" data-tab="faculty">Faculty</button>
                <button class="nav-link" data-tab="students">Students</button>
            </div>
        </div>
        
        <div class="col-md-9">
            <div class="loading">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            
            <div id="tabContent" class="tab-content active">
                <!-- Content will be loaded here -->
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Cache for tab data
    const tabCache = {};
    
    // Function to load tab content
    function loadTabContent(tabId) {
        if (tabCache[tabId]) {
            displayTabContent(tabId, tabCache[tabId]);
            return;
        }
        
        $('.loading').addClass('active');
        $('#tabContent').removeClass('active');
        
        $.get('department.php', { tab: tabId })
            .done(function(data) {
                tabCache[tabId] = data;
                displayTabContent(tabId, data);
            })
            .fail(function(error) {
                console.error('Error loading tab:', error);
                $('#tabContent').html('<div class="alert alert-danger">Error loading content</div>');
            })
            .always(function() {
                $('.loading').removeClass('active');
                $('#tabContent').addClass('active');
            });
    }
    
    // Function to display tab content
    function displayTabContent(tabId, data) {
        let html = '';
        
        switch(tabId) {
            case 'overview':
                html = `<div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Department Overview</h2>
                        <p>${data[0].description}</p>
                    </div>
                </div>`;
                break;
                
            case 'vision':
                html = `<div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Vision & Mission</h2>
                        <div class="mb-4">
                            <h3>Vision</h3>
                            <p>${data[0].vision}</p>
                        </div>
                        <div>
                            <h3>Mission</h3>
                            <p>${data[0].mission}</p>
                        </div>
                    </div>
                </div>`;
                break;
                
            case 'faculty':
                html = `<div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Faculty Members</h2>
                        <div class="row">
                            ${data.map(faculty => `
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">${faculty.name}</h5>
                                            <p class="card-text">${faculty.designation}</p>
                                            <p class="card-text"><small class="text-muted">${faculty.qualification}</small></p>
                                        </div>
                                    </div>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                </div>`;
                break;
                
            case 'students':
                html = `<div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Student Events</h2>
                        ${data.map(event => `
                            <div class="mb-3">
                                <h4>${event.title}</h4>
                                <p>${event.description}</p>
                            </div>
                        `).join('')}
                    </div>
                </div>`;
                break;
        }
        
        $('#tabContent').html(html);
    }
    
    // Handle tab clicks
    $('.nav-link').click(function() {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
        
        const tabId = $(this).data('tab');
        loadTabContent(tabId);
    });
    
    // Load initial tab
    loadTabContent('overview');
});
</script>

</body>
</html>