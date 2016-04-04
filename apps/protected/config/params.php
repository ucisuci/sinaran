<?php


// this contains the application parameters that can be maintained via GUI

//Development lokal
if($_SERVER['SERVER_ADDR'] != "192.168.90.109"){
	//development
	return array(
		// this is displayed in the header section
		'title'=>'Sistem Beasiswa Universitas Indonesia',
		//pdf file upload directory
		'pdfUploadPath'=>'/../../files/upload/pdf/',
		'pdfRetrievePath'=>'/files/upload/pdf/',
		'imageUploadThumbnailsPath'=>'/../../files/upload/image/thumbnails/',
		'imageUploadOriginalPath'=>'/../../files/upload/image/original/',
		'imageRetrieveThumbnailsPath'=>'/files/upload/image/thumbnails/',
		'imageRetrieveOriginalPath'=>'/files/upload/image/original/',
		'listPerPage'=> 25,
		'casServer'=>'sso.ui.ac.id/cas3',
		'casPort'=>443,
		'imageThumbnailsHeight'=>100,
		'imageThumbnailsWidth'=>100,
		'uploadBaseFolderPath'=>'/../../files/download/',
		'retrieveBaseFolderPath'=>'',
		'uploadFileType'=>
			array(
				'pdf'=>
					array(
						'uploadPath'=>'pdf/',
						'createThumbnails'=>false
					),
				'jpg'=>
					array(
						'uploadPath'=>'images/',
						'createThumbnails'=>true,
						'uploadThumbnailsPath'=>'images/thumbnails/',
					),
				'png'=>
					array(
						'uploadPath'=>'images/',
						'createThumbnails'=>true,
						'uploadThumbnailsPath'=>'images/thumbnails/',
					),
				'gif'=>
					array(
						'uploadPath'=>'images/',
						'createThumbnails'=>true,
						'uploadThumbnailsPath'=>'images/thumbnails/',
					)
			),
		'generalController'=>array('site', 'paketbeasiswa', 'login'),
	);
}else {
    //production
    return array(
        // this is displayed in the header section
        'title'=>'Sistem Beasiswa Universitas Indonesia',
        //pdf file upload directory
        'pdfUploadPath'=>'/../../files/upload/pdf/',
        'pdfRetrievePath'=>'/files/upload/pdf/',
        'imageUploadThumbnailsPath'=>'/../../files/upload/image/thumbnails/',
        'imageUploadOriginalPath'=>'/../../files/upload/image/original/',
        'imageRetrieveThumbnailsPath'=>'/files/upload/image/thumbnails/',
        'imageRetrieveOriginalPath'=>'/files/upload/image/original/',
        'listPerPage'=> 25,
        'casServer'=>'sso.ui.ac.id/cas3',
        'casPort'=>443,
        'imageThumbnailsHeight'=>100,
        'imageThumbnailsWidth'=>100,
        'uploadBaseFolderPath'=>'/../../files/download/',
        'retrieveBaseFolderPath'=>'',
        'uploadFileType'=>
            array(
                'pdf'=>
                    array(
                        'uploadPath'=>'pdf/',
                        'createThumbnails'=>false
                    ),
                'jpg'=>
                    array(
                        'uploadPath'=>'images/',
                        'createThumbnails'=>true,
                        'uploadThumbnailsPath'=>'images/thumbnails/',
                    ),
                'png'=>
                    array(
                        'uploadPath'=>'images/',
                        'createThumbnails'=>true,
                        'uploadThumbnailsPath'=>'images/thumbnails/',
                    ),
                'gif'=>
                    array(
                        'uploadPath'=>'images/',
                        'createThumbnails'=>true,
                        'uploadThumbnailsPath'=>'images/thumbnails/',
                    )
            ),
        'generalController'=>array('site', 'paketbeasiswa', 'login'),
    );
}

