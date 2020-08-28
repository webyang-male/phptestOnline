<?php
	//某一项数据,数据提交方式,数据类型,默认值
	function getData($var,$method,$type='string',$default=''){
		switch($method){
			case 'get': $method=$_GET;break;
			case 'post': $method=$_POST;break;
		}
		$value=isset($method[$var])?$method[$var]:$default;//取到数据项
		//处理数据类型
		switch($type){
			case 'string' :$value=is_string($value)?$value:'';break;
			case 'int' :$value=(int)$value;break;
			case 'float' :$value=(float)$value;break;
			case 'id' :$value=max((int)$value,0);break;
			case 'bool' :$value=(bool)$value;break;
			case 'array' :$value=is_array($value)?$value:[];break;
			case 'html' :$value=str_replace('','&nbsp',trim(htmlspecialchars($value)));break;
		}
		return $value;
	}
	
	//显示提示信息,$msg=[false,'用户名或密码错！']
	function tips($msg=null){
		if(!$msg){
			return '';
		}else{
			return $msg[0]?'<div>'.$msg[1].'</div>':'<div class="error">'.$msg[1].'</div>';
		}
	}
	
/**
*  数据导入
* @param string $file excel文件
* @param string $sheet
 * @return string   返回解析数据
 * @throws PHPExcel_Exception
 * @throws PHPExcel_Reader_Exception
*/ 
function importExecl($file='', $sheet=0){ 
    $file = iconv("utf-8", "gb2312", $file);   //转码 
    if(empty($file) OR !file_exists($file)) { 
        die('file not exists!'); 
    } 
    include('../utils/PHPExcel.class.php');  //引入PHP EXCEL类 
    $objRead = new PHPExcel_Reader_Excel2007();   //建立reader对象 
    if(!$objRead->canRead($file)){ 
        $objRead = new PHPExcel_Reader_Excel5(); 
        if(!$objRead->canRead($file)){ 
            die('No Excel!'); 
        } 
    } 
   
    $cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ'); 
   
    $obj = $objRead->load($file);  //建立excel对象 
    $currSheet = $obj->getSheet($sheet);   //获取指定的sheet表 
    $columnH = $currSheet->getHighestColumn();   //取得最大的列号 
    $columnCnt = array_search($columnH, $cellName); 
    $rowCnt = $currSheet->getHighestRow();   //获取总行数 
   
    $data = array(); 
    for($_row=1; $_row<=$rowCnt; $_row++){  //读取内容 
        for($_column=0; $_column<=$columnCnt; $_column++){ 
            $cellId = $cellName[$_column].$_row; 
            $cellValue = $currSheet->getCell($cellId)->getValue(); 
             //$cellValue = $currSheet->getCell($cellId)->getCalculatedValue();  #获取公式计算的值 
            if($cellValue instanceof PHPExcel_RichText){   //富文本转换字符串 
                $cellValue = $cellValue->__toString(); 
            } 
   
            $data[$_row][$cellName[$_column]] = $cellValue; 
        } 
    } 
   
    return $data; 
} 

?>