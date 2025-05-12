<!doctype html>
<html>
    <head>
	<title>Uploading ... </title>
	<meta charset="utf-8" />
    </head>
    <body>
	<h1>Uploading File ... </h1>

	<?php
	if($_FILES['the_file']['error'] > 0){
	    echo 'Problem: ';
	    switch($_FILES['the_file']['error']){
		case 1:
		    echo "File exceeded upload_max_filesize. ";
		    break;
		case 2:
		    echo "File exceeded max_file_size. ";
		    break;
		case 3:
		    echo "File only partially uploaded. ";
		    break;
		case 4:
		    echo "No file uploaded. ";
		    break;
		case 6:
		    echo "Cannot upload file: No temp directory specified. ";
		    break;
		case 7:
		    echo "Upload failed: cannot write to disk. ";
	            break;
	
		case 8:
		    echo "A PHP extension blocked the file upload. ";
		    break;
	    }
	    exit;
	}
	$upload_file = '../upload/'. $_FILES['the_file']['name'];

	$allowedMimeTypes = [
	    'application/vnd.ms-excel',
	    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
	];       // excel文件类型数组

	if(is_uploaded_file($_FILES['the_file']['tmp_name'])){
	    if(!in_array($_FILES['the_file']['type'], $allowedMimeTypes)){
		echo "上传文件不是excel表格文件！";
		exit;
	    } 
	    else{
		echo "上传文件是excel表格文件！";
		if(!move_uploaded_file($_FILES['the_file']['tmp_name'],$upload_file)){
		    echo "Problem: Could not move file to directory. ";
		    exit;
		}
	    }
	}
	echo 'File uploaded successfully. <br />';
	echo  "../upload/". $_FILES['the_file']['name'] . '<br />';
	$file_uploaded = "../upload/". $_FILES['the_file']['name'];

	require '../vendor/autoload.php';
	use PhpOffice\PhpSpreadsheet\IOFactory;
	//	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	//	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	
	$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
	$reader->setReadDataOnly(TRUE);
	$spreadsheet = $reader->load($file_uploaded); //载入excel表格
	if($spreadsheet){
	    echo "读取成功！";
	}
	else{
	    echo "读取失败！";
	}

	$worksheet = $spreadsheet->getActiveSheet();
	$highestRow = $worksheet->getHighestRow();
	$highestColumn = $worksheet->getHighestColumn();
	echo $highestRow . "行" . $highestColumn .'列 <br />'  ;

	$cell = $worksheet->getCell('b2');
	echo $cell->getValue() ;
	$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);   //列的索引数（即第几列）


	
	//	echo $class;

//	echo $highestColumnIndex;
	?>
	
    </body>
</html>
