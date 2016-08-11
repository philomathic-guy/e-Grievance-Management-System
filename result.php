<?php
session_start();

require('phplot.php');
	$dir = "images/";
	$filename = "data.png";
			

			$p_ar_m1=$p_ar_m2=$p_ar_m3=$p_ar_m4=$p_ar_m5=$p_ar_m6=$p_ar_m7=$p_ar_m8=$p_ar_m9=$p_ar_m10=$p_ar_m11=$p_ar_m12=0;
			$p_dr_m1=$p_dr_m2=$p_dr_m3=$p_dr_m4=$p_dr_m5=$p_dr_m6=$p_dr_m7=$p_dr_m8=$p_dr_m9=$p_dr_m10=$p_dr_m11=$p_dr_m12=0;
			$p_cc_m1=$p_cc_m2=$p_cc_m3=$p_cc_m4=$p_cc_m5=$p_cc_m6=$p_cc_m7=$p_cc_m8=$p_cc_m9=$p_cc_m10=$p_cc_m11=$p_cc_m12=0;
			$am1=$am2=$am3=$am4=$am5=$am6=$am7=$am8=$am9=$am10=$am11=$am12=0;
			$y=$_POST["year"];
			$con=mysql_connect("localhost", "root", "") or die (mysql_error());
			mysql_select_db("mu") or die ("Cannot connect to database");
			$query = mysql_query("Select * from pending_complaints where `year`=$y");
			while($row= mysql_fetch_array($query))
			{
				$x=explode(" ",$row['status']);
				if($x[0]=='AR' && $row['month']==1)
					$p_ar_m1++;
				if($x[0]=='AR' && $row['month']==2)
					$p_ar_m2++;
				if($x[0]=='AR' && $row['month']==3)
					$p_ar_m3++;
				if($x[0]=='AR' && $row['month']==4)
					$p_ar_m4++;
				if($x[0]=='AR' && $row['month']==5)
					$p_ar_m5++;
				if($x[0]=='AR' && $row['month']==6)
					$p_ar_m6++;
				if($x[0]=='AR' && $row['month']==7)
					$p_ar_m7++;
				if($x[0]=='AR' && $row['month']==8)
					$p_ar_m8++;
				if($x[0]=='AR' && $row['month']==9)
					$p_ar_m9++;
				if($x[0]=='AR' && $row['month']==10)
					$p_ar_m10++;
				if($x[0]=='AR' && $row['month']==11)
					$p_ar_m11++;
				if($x[0]=='AR' && $row['month']==12)
					$p_ar_m12++;


				if($row['status']=='DR' && $row['month']==1)
					$p_dr_m1++;
				if($row['status']=='DR' && $row['month']==2)
					$p_dr_m2++;
				if($row['status']=='DR' && $row['month']==3)
					$p_dr_m3++;
				if($row['status']=='DR' && $row['month']==4)
					$p_dr_m4++;
				if($row['status']=='DR' && $row['month']==5)
					$p_dr_m5++;
				if($row['status']=='DR' && $row['month']==6)
					$p_dr_m6++;
				if($row['status']=='DR' && $row['month']==7)
					$p_dr_m7++;
				if($row['status']=='DR' && $row['month']==8)
					$p_dr_m8++;
				if($row['status']=='DR' && $row['month']==9)
					$p_dr_m9++;
				if($row['status']=='DR' && $row['month']==10)
					$p_dr_m10++;
				if($row['status']=='DR' && $row['month']==11)
					$p_dr_m11++;
				if($row['status']=='DR' && $row['month']==12)
					$p_dr_m12++;

				if($row['status']=='CC' && $row['month']==1)
					$p_cc_m1++;
				if($row['status']=='CC' && $row['month']==2)
					$p_cc_m2++;
				if($row['status']=='CC' && $row['month']==3)
					$p_cc_m3++;
				if($row['status']=='CC' && $row['month']==4)
					$p_cc_m4++;
				if($row['status']=='CC' && $row['month']==5)
					$p_cc_m5++;
				if($row['status']=='CC' && $row['month']==6)
					$p_cc_m6++;
				if($row['status']=='CC' && $row['month']==7)
					$p_cc_m7++;
				if($row['status']=='CC' && $row['month']==8)
					$p_cc_m8++;
				if($row['status']=='CC' && $row['month']==9)
					$p_cc_m9++;
				if($row['status']=='CC' && $row['month']==10)
					$p_cc_m10++;
				if($row['status']=='CC' && $row['month']==11)
					$p_cc_m11++;
				if($row['status']=='CC' && $row['month']==12)
					$p_cc_m12++;

			}
			$query = mysql_query("Select * from attended_complaints where `year`=$y");
			while($row= mysql_fetch_array($query))
			{
				$x=explode(" ",$row['status']);
				if($x[0]=='AR' && $row['month']==1)
					$am1++;
				if($x[0]=='AR' && $row['month']==2)
					$am2++;
				if($x[0]=='AR' && $row['month']==3)
					$am3++;
				if($x[0]=='AR' && $row['month']==4)
					$am4++;
				if($x[0]=='AR' && $row['month']==5)
					$am5++;
				if($x[0]=='AR' && $row['month']==6)
					$am6++;
				if($x[0]=='AR' && $row['month']==7)
					$am7++;
				if($x[0]=='AR' && $row['month']==8)
					$am8++;
				if($x[0]=='AR' && $row['month']==9)
					$am9++;
				if($x[0]=='AR' && $row['month']==10)
					$am10++;
				if($x[0]=='AR' && $row['month']==11)
					$am11++;
				if($x[0]=='AR' && $row['month']==12)
					$am12++;
			}
			


			$data = array(
			  array('January',$p_ar_m1,$p_dr_m1,$p_cc_m1,$am1),array('February',$p_ar_m2,$p_dr_m2,$p_cc_m2,$am2),array('March',$p_ar_m3,$p_dr_m3,$p_cc_m3,$am3),
			  array('April',$p_ar_m4,$p_dr_m4,$p_cc_m4,$am4),array('May',$p_ar_m5,$p_dr_m5,$p_cc_m5,$am5),array('June',$p_ar_m6,$p_dr_m6,$p_cc_m6,$am6),
			  array('July',$p_ar_m7,$p_dr_m7,$p_cc_m7,$am7),array('August',$p_ar_m8,$p_dr_m8,$p_cc_m8,$am8),array('September',$p_ar_m9,$p_dr_m9,$p_cc_m9,$am9),
			  array('October',$p_ar_m10,$p_dr_m10,$p_cc_m10,$am10),array('November',$p_ar_m11,$p_dr_m11,$p_cc_m11,$am11),array('December',$p_ar_m12,$p_dr_m12,$p_cc_m12,$am12),);



$plot = new PHPlot(1350,620,$dir.$filename);
$plot->SetImageBorderType('plain'); // Improves presentation in the manual
$plot->SetPlotType('bars');
$plot->SetDataValues($data);
$plot->SetYDataLabelPos('plotin');
$plot->SetFileFormat('png');
$plot->SetIsInline(true); 
 
$plot->SetDataType('text-data');
$plot->SetTitle('Report');
$plot->SetXTitle('Month');
$plot->SetYTitle('No of Grievances');
# Turn off X Tick labels which have no meaning here.
$plot->SetXTickPos('none');
# For titles, use Arial Bold Italic at 14 points:
$plot->SetFontTTF('title', 'GARABD.TTF', 18);

# For X Title, use Verdana at 12 points:
$plot->SetFontTTF('x_title', 'GARABD.TTF', 14);
$plot->SetFontTTF('y_title', 'GARABD.TTF', 14);
$plot->SetFontTTF('x_label', 'GARABD.TTF', 10);
$plot->SetFontTTF('y_label', 'GARABD.TTF', 10);
# Force the Y axis to be exactly 0:100

$plot->SetPlotAreaWorld(NULL, 0, NULL, 40);

# Establish the function 'pickcolor' as a data color selection callback.
# Set the $data array as the pass-through argument, so the function has
# access to the data values without relying on global variables.

# The three colors are meaningful to the data color callback.
$plot->SetDataColors(array('red','orange','yellow','green'));

# The legend will explain the use of the 4 colors.
$plot->SetLegend(array('Pending Grievances by AR','Pending Grievances by DR','Pending Grievances by CC','Attended Grievances'));


$plot->DrawGraph();



    
	
?>

<html>
<head>
	<script type="text/javascript">
	function view_pdf()
	{
		var y='<?php echo $y ?>';
		window.location.href="pdf.php?year="+y;
	}

	</script>
</head>
<body>
<img src='images/data.png'/>
<button onclick="view_pdf()">View as PDF</button>
</body>
</html>