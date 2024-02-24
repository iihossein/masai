FilePond.registerPlugin(FilePondPluginImagePreview);


const labels_fa_ir = {
    labelIdle: 'فایل را اینجا بکشید و رها کنید، یا <span class="filepond--label-action"> جستجو کنید </span>',
    labelInvalidField: 'فیلد دارای فایل های نامعتبر است',
    labelFileWaitingForSize: 'Waiting for size',
    labelFileSizeNotAvailable: 'حجم فایل مجاز نیست',
    labelFileLoading: 'درحال بارگذاری',
    labelFileLoadError: 'خطا در زمان اجرا',
    labelFileProcessing: 'درحال بارگذاری',
    labelFileProcessingComplete: 'بارگذاری کامل شد',
    labelFileProcessingAborted: 'بارگذاری لغو شد',
    labelFileProcessingError: 'خطا در زمان بارگذاری',
    labelFileProcessingRevertError: 'خطا در زمان حذف',
    labelFileRemoveError: 'خطا در زمان حذف',
    labelTapToCancel: 'برای لغو ضربه بزنید',
    labelTapToRetry: 'برای تکرار کلیک کنید',
    labelTapToUndo: 'برای برگشت کلیک کنید',
    labelButtonRemoveItem: 'حذف',
    labelButtonAbortItemLoad: 'لغو',
    labelButtonRetryItemLoad: 'تکرار',
    labelButtonAbortItemProcessing: 'لغو',
    labelButtonUndoItemProcessing: 'برگشت',
    labelButtonRetryItemProcessing: 'تکرار',
    labelButtonProcessItem: 'بارگذاری',
    labelMaxFileSizeExceeded: 'فایل بسیار حجیم است',
    labelMaxFileSize: 'حداکثر مجاز فایل {filesize} است',
    labelMaxTotalFileSizeExceeded: 'از حداکثر حجم فایل بیشتر شد',
    labelMaxTotalFileSize: 'حداکثر حجم فایل {filesize} است',
    labelFileTypeNotAllowed: 'نوع فایل نامعتبر است',
    fileValidateTypeLabelExpectedTypes: 'در انتظار {allButLastType} یا {lastType}',
    imageValidateSizeLabelFormatError: 'فرمت تصویر پشتیبانی نمی شود',
    imageValidateSizeLabelImageSizeTooSmall: 'تصویر بسیار کوچک است',
    imageValidateSizeLabelImageSizeTooBig: 'تصویر بسیار بزرگ است',
    imageValidateSizeLabelExpectedMinSize: 'حداقل اندازه {minWidth} × {minHeight} است',
    imageValidateSizeLabelExpectedMaxSize: 'حداکثر اندازه {maxWidth} × {maxHeight} است',
    imageValidateSizeLabelImageResolutionTooLow: 'وضوح تصویر بسیار کم است',
    imageValidateSizeLabelImageResolutionTooHigh: 'وضوع تصویر بسیار زیاد است',
    imageValidateSizeLabelExpectedMinResolution: 'حداقل وضوح تصویر {minResolution} است',
    imageValidateSizeLabelExpectedMaxResolution: 'حداکثر وضوح تصویر {maxResolution} است'
}



const inputElement = document.querySelector('input[id="file"]');
FilePond.setOptions(labels_fa_ir);

// Create a FilePond instance
const pond = FilePond.create(inputElement);

// process: 'dashboard/upload',
//     revert: 'dashboard/delete',


