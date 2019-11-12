<? php ConvertApi::setApiSecret('0UA62DeuvRLOIUAq');
$result = ConvertApi::convert('pdf', [
        'File' => '/path/to/my_file.docx',
        'PdfResolution' => '606',
        'PdfTitle' => 'outputfile',
        'PdfSubject' => 'ddjffjf',
        'PdfAuthor' => 'pdfonlineconvertor',
        'PdfKeywords' => 'converted from pdfonlineconterot.com',
    ], 'docx'
);
$result->saveFiles('/path/to/result/dir'); ?>