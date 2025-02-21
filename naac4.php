<?php

$con = mysqli_connect('srv1328.hstgr.io', 'u629694569_vcpkacin_web', 'Kakatiya@1243', 'u629694569_vcpkacin_web');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Array of criteria (you can add more as needed)
$criterions = [
    'Criterion 1',
    'Criterion 2',
    'Criterion 3',
    'Criterion 4',  // Add more criteria here
    'Criterion 5',
    'Criterion 6',
    // Continue adding as necessary
];

// Initialize an array to store all the data
$data = [];

foreach ($criterions as $criterion) {
    // Build the query for each criterion
    $query = "SELECT * FROM naac WHERE criterion LIKE '$criterion' AND status = 1 AND topic_parent != 0 AND type = 'SSR';";
    $result = mysqli_query($con, $query);

    // If the query returns results, fetch and store them in the $data array
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Add the criterion name to each row for identification
            $row['criterion_name'] = $criterion;
            $data[$criterion][] = $row;
        }
    }
}

?>

<!-- <div class="row naac-sen naac-sen">
    <?php 
    // Loop through the data for each criterion and display it
    foreach ($data as $criterion => $rows):
        foreach ($rows as $row):
    ?>
        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
            <div class="criterion">
                <p>Criterion: <?= htmlspecialchars($row['topic']) ?> (<?= htmlspecialchars($criterion) ?>)</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
            <div class="view">
                <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
            </div>
        </div>
    <?php endforeach; endforeach; ?>
</div> -->

<!-- <div class="row naac-sen naac-sen">
    <?php 
    // Loop through the data for each criterion and only use the 0th index for the rows
    foreach ($data as $criterion => $rows):
        // Access only the first element (index 0) of the rows array
        $firstRow = $rows[0];  
    ?>
        <div class="criterion-block">
            <h3><?= htmlspecialchars($criterion) ?></h3>  

            <div class="row naac-sen naac-sen">
                <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="criterion">
                        <p>Topic: <?= htmlspecialchars($firstRow['topic']) ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="view">
                        <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($firstRow['topic_file']) ?>" target="_blank">Click here</a></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div> -->

<div class="row naac-sen naac-sen">
    <?php 
    // Loop through the data for each criterion
    foreach ($data as $criterion => $rows):
        // Check if the criterion is "Criterion 1"
        if ($criterion == 'Criterion 1'):
    ?>
        <div class="criterion-block">
            <h3><?= htmlspecialchars($criterion) ?></h3>  <!-- Display the criterion name -->

            <div class="row naac-sen naac-sen">
                <?php 
                // Loop through all rows of "Criterion 1"
                foreach ($rows as $row): 
                ?>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="criterion">
                            <p>Topic: <?= htmlspecialchars($row['topic']) ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="view">
                            <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php 
        endif;  // Close the "if" condition for Criterion 1
    endforeach; 
    ?>
</div>

