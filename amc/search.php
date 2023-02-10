<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="search.css" rel="stylesheet">
	 <link rel="stylesheet" href="PCAMC/style.css">
	 <script type="text/javascript" src="contact us_files/naveen_script.js"></script>
    <title>Search Data</title>
</head>
<body>
 <div class="noselect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search Compliant data from Database </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Comp_Number</th>
                                    <th>UserName</th>
                                    <th>Contact_number</th>
                                    <th>Location</th>
									<th>Problem_Desc</th>
									<th>Comp_Date</th>
									<th>Comp_Time</th>
									<th>Rectified_Person</th>
									<th>Problem_Observed</th>
									<th>Rectified_Date</th>
									<th>Rectified_time</th>
									<!--<th>Rectified_by_procress</th>-->
									<th>Remarks</th>
									<th>Comp_Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","Naveen@798@@","pcamc");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM complaint WHERE CONCAT(UserName,Comp_Date,Location,Problem_Observed,Problem_Desc,Comp_Status,Rectified_by_person,Remarks) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['serialNumber']; ?></td>
                                                    <td><?= $items['UserName']; ?></td>
                                                    <td><?= $items['Contact_number']; ?></td>
                                                    <td><?= $items['Location']; ?></td>
													<td><?= $items['Problem_Desc']; ?></td>
														<td><?= $items['Comp_Date']; ?></td>
															<td><?= $items['Comp_Time']; ?></td>
															<td><?= $items['Rectified_by_person']; ?></td>
															<td><?= $items['Problem_Observed']; ?></td>
															<td><?= $items['RectifiedDate']; ?></td>
															<td><?= $items['RectfiedTime']; ?></td>
															
															<td><?= $items['Remarks']; ?></td>
															<td><?= $items['Comp_Status']; ?></td>
													
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br> <CENTER>
   <B> <a href="http://10.19.8.13/Index.php"><font color="ORANGE">BACK TO LOGIN PAGE</a></font> </B><br><br>
   <button class="cn"><font size=4><a href="search.php">Back to Search </a></button></font>
	</div>			
</body>
</html>

