<?php

/**
 * This is the model class for table "acc_management.file_attachments".
 *
 * The followings are the available columns in table 'acc_management.file_attachments':
 * @property integer $id
 * @property integer $id_fk
 * @property string $nama_file
 * @property string $tipe_file
 * @property string $ekstensi
 * @property string $deskripsi
 * @property string $created
 * @property string $modified
 * @property string $ukuran
 * @property string $path
 * @property string $is_delete
 * @property string $delete_date
 */
class FileAttachments extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'role_management.file_attachments';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_fk', 'numerical', 'integerOnly'=>true),
            array('nama_file', 'length', 'max'=>100),
            array('tipe_file', 'length', 'max'=>50),
            array('ekstensi', 'length', 'max'=>10),
            array('deskripsi, created, modified, ukuran', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, id_fk, nama_file, tipe_file, ekstensi, deskripsi, created, modified, ukuran', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'id_fk' => 'Id Fk',
            'nama_file' => 'Nama File',
            'tipe_file' => 'Tipe File',
            'ekstensi' => 'Ekstensi',
            'deskripsi' => 'Deskripsi',
            'created' => 'Created',
            'modified' => 'Modified',
            'ukuran' => 'Ukuran',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('id_fk',$this->id_fk);
        $criteria->compare('nama_file',$this->nama_file,true);
        $criteria->compare('tipe_file',$this->tipe_file,true);
        $criteria->compare('ekstensi',$this->ekstensi,true);
        $criteria->compare('deskripsi',$this->deskripsi,true);
        $criteria->compare('created',$this->created,true);
        $criteria->compare('modified',$this->modified,true);
        $criteria->compare('ukuran',$this->ukuran,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return FileAttachments the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public static function createUploadDirectory() {

        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');

        $uploadFileType = Yii::app()->params['uploadFileType'];

        $basePath = Yii::app()->basePath;

        $uploadBaseFolderPath = $basePath.Yii::app()->params['uploadBaseFolderPath'];
        $uploadYearFolderPath = $uploadBaseFolderPath.$currentYear."/";
        $uploadMonthFolderPath = $uploadYearFolderPath.$currentMonth."/";
        $uploadDayFolderPath = $uploadMonthFolderPath.$currentDay."/";

        if (!file_exists($uploadBaseFolderPath)) {
            mkdir($uploadBaseFolderPath);
        }

        if (!file_exists($uploadYearFolderPath)) {
            mkdir($uploadYearFolderPath);
        }

        if (!file_exists($uploadMonthFolderPath)) {
            mkdir($uploadMonthFolderPath);
        }

        if (!file_exists($uploadDayFolderPath)) {
            mkdir($uploadDayFolderPath);
        }

        $uploadFilePathPrimary = $uploadDayFolderPath;

        foreach ($uploadFileType As $i=>$file){

            $uploadFilePath = $uploadFilePathPrimary.$file['uploadPath'];

            if (!file_exists($uploadFilePath)) {

                mkdir($uploadFilePath);
            }

            if ($file['createThumbnails']) {

                $uploadFileThumbnailsPath = $uploadFilePathPrimary.$file['uploadThumbnailsPath'];
                if (!file_exists($uploadFileThumbnailsPath)) {
                    mkdir($uploadFileThumbnailsPath);
                }

            }

        }

    }

    public static function uploadFile($files, $tipeFile, $idFk,$deskripsi = array()) {

        //echo "<pre>";print_r(Yii::app()->params['uploadFileType']);
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');

        $uploadFileType = Yii::app()->params['uploadFileType'];

        $basePath = Yii::app()->basePath;

        $uploadBaseFolderPath = Yii::app()->params['uploadBaseFolderPath'];
        $uploadYearFolderPath = $basePath.$uploadBaseFolderPath.$currentYear."/";
        $uploadMonthFolderPath = $uploadYearFolderPath.$currentMonth."/";
        $uploadDayFolderPath = $uploadMonthFolderPath.$currentDay."/";

        $retrieveBaseFolderPath = Yii::app()->params['retrieveBaseFolderPath'];
        $retrieveYearFolderPath = $retrieveBaseFolderPath.$currentYear."/";
        $retrieveMonthFolderPath = $retrieveYearFolderPath.$currentMonth."/";
        $retrieveDayFolderPath = $retrieveMonthFolderPath.$currentDay."/";

        $uploadFilePathPrimary = $uploadDayFolderPath;
        $retrieveFilePathPrimary = $retrieveDayFolderPath;

        $imageThumbnailsHeigth = Yii::app()->params['imageThumbnailsHeight'];
        $imageThumbnailsWidth = Yii::app()->params['imageThumbnailsWidth'];

        foreach($files as $i=>$file){
            
            $fileName = strtolower($file->name);
            $fileSize = $file->size;
            $fileExtension = strtolower($file->extensionName);
            $fileSizeKb = round($fileSize/1024, 2);
            if($fileExtension == "pdf")
            {
                $foldertipe = "pdf";
            }else{
                $foldertipe = "images";
            }

          

            $fileAttachments = new FileAttachments;
            $fileAttachments->id_fk = $idFk;
            if(!empty($deskripsi)){
                $fileAttachments->deskripsi = $deskripsi[$i];
            }
            $fileAttachments->nama_file = $fileName;
            $fileAttachments->tipe_file = $tipeFile;
            $fileAttachments->ekstensi = $fileExtension;
            $fileAttachments->ukuran = $fileSizeKb;
            $fileAttachments->path = $retrieveFilePathPrimary.$foldertipe;
            $fileAttachments->created = date('[Y-m-d] [H:i:s]');
            $fileAttachments->save();

            $fileName=str_replace(" ", "_", $fileName);
            $fileName=str_replace("+", "_", $fileName);

            $createThumbnails = $uploadFileType[$fileExtension]['createThumbnails'];
            $uploadFilePath = $uploadFilePathPrimary.$uploadFileType[$fileExtension]['uploadPath'];
            $fileName = $fileAttachments->id."_".$fileName;
            $uploadFile = $uploadFilePath.$fileName;
            $file->saveAs($uploadFile);

            if ($createThumbnails) {

                $uploadFileThumbnailsPath = $uploadFilePathPrimary.$uploadFileType[$fileExtension]['uploadThumbnailsPath'];
                $uploadFileThumbnails = $uploadFileThumbnailsPath.$fileName;

                $thumb=Yii::app()->phpThumb->create($uploadFile);
                $thumb->resize($imageThumbnailsWidth, $imageThumbnailsHeigth);
                $thumb->save($uploadFileThumbnails);

            }

            FileAttachments::model()->updateByPk($fileAttachments->id, array('nama_file'=>$fileName));

        }

    }

    public static function deleteFile($files) {

        foreach($files as $fileId) {

            FileAttachments::model()->updateByPk($fileId,
                array(
                    'is_delete'=>true,
                    'delete_date'=>date('[Y-m-d] [H:i:s]')
                )
            );

        }

    }
    public static function updateFile($files,$deskripsi = array()) {

        foreach($files as $k=>$fileId) {

            FileAttachments::model()->updateByPk($fileId,
                array(
                    'deskripsi'=>$deskripsi[$k]
                )
            );

        }

    }

    public static function parameterAcceptedFileUpload($acceptedFileUpload) {

        $param = "";
        $arrSize = count($acceptedFileUpload);
        $i=0;
        foreach($acceptedFileUpload as $type) {
            //echo $file;
            //echo "<br />";
            if ($i>0 && $i<$arrSize) {
                $param = $param."|";
            }
            $param = $param.$type;
            $i++;

        }

        return $param;

    }

    public static function errorMessageAcceptedFileUpload($acceptedFileUpload) {

        $param = "";
        $arrSize = count($acceptedFileUpload);
        $i=0;
        foreach($acceptedFileUpload As $type) {
            //echo $file;
            //echo "<br />";
            if ($i>0 && $i<$arrSize) {
                $param = $param.", ";
            }
            $param = $param.$type;
            $i++;

        }
        $message = "Hanya menerima dokumen berekstensi ".$param;
        return $message;

    }

    public static function getUrlDownload($filePath, $fileName) {
        /*config nginx
        $prefix = "http://192.168.60.171/download";

		$file = "2015/01/01/ini%20adin.txt";
		$t = time();
		$t += 100000;
		$ip = "192.168.60.254";
		$hashmac = md5( "$t$ip oonai8moochiemaMeiw4aughaithe1" , true);
		$base64 = base64_encode($hashmac);
		$base64 = str_replace("+", "-", $base64);
		$base64 = str_replace("/", "_", $base64);
		$base64 = str_replace("=", "", $base64);

		$uri = $prefix .  "/$base64/$t/$file";

		// $prefix = "http://192.168.60.171/download/HASH/TIMESTAMP/file%20nya.txt";

		// HASH( "TIMESTAMP/download/HASH/TIMESTAMP/file%20nya.txt192.168.60.171 oonai8moochiemaMeiw4aughaithe1" )
		echo $uri;
		echo "\n";
		        */
        //public static function getUrlDownload() {
        $baseUrl = "http://".$_SERVER['SERVER_NAME'];
        //echo "<pre>";print_r($baseUrl);die();
        //Yii::app()->getBaseUrl(true);

        $kunciKata = 'oonai8moochiemaMeiw4aughaithe1';
        $prefix = $baseUrl."/download";
        $timestamp = time();
        $timestamp += 100000;
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { // to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $ip = $_SERVER['REMOTE_ADDR'];
        //print_r($ip);die();
     


       // $fileName = rawurlencode($fileName);
        $fileName = str_replace(" ","%20",$fileName);
        $hashmac = md5( "$kunciKata$timestamp$ip" , true);

        $base64 = base64_encode($hashmac);
        $base64 = str_replace("+", "-", $base64);
        $base64 = str_replace("/", "_", $base64);
        $base64 = str_replace("=", "", $base64);

        $fileUrl = $prefix .  "/$base64/$timestamp/$filePath/$fileName";


        //$dt = new DateTime();
        //echo $dt->format('H:i:s');
        //echo " ";
        //echo date('H:i:s', time());
        //$time = $dt->format('H:i:s');
        //echo "Current Time : ".$time;
        //$hashString = $fileName.$kunciKata.$timestamp;
        //$key = md5($hashString);
        //$fileUrl = $baseUrl."/".$filePath.$fileName."?key=".$key."&time=".$time;

        return $fileUrl;

    }

}
