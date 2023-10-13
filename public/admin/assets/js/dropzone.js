// npm package: dropify
// github link: https://github.com/dropzone/dropzone


// $(function() {
//     'use strict';

//     $("exampleDropzone").dropzone({
//         url: 'nobleui.com'
//     });

// });



// $(document).ready(function() {
//     Dropzone.autoDiscover = false;
//     $("#dZUpload").dropzone({
//       url: "up.php",
//       paramName: "images",
//       maxFilesize: 2, // حداکثر حجم فایل (مگابایت)
//       maxFiles: 7, // حداکثر تعداد فایل‌ها
//       acceptedFiles: "image/*", // فقط فایل‌های تصویر قابل قبول هستند
//       dictDefaultMessage: "فایل‌های خود را اینجا رها کنید یا کلیک کنید تا آپلود کنید",
//       dictFileTooBig: "حجم فایل بیشتر از مقدار مجاز است",
//       dictMaxFilesExceeded: "شما نمی‌توانید بیشتر از حداکثر تعداد فایل‌ها را آپلود کنید",
//       init: function() {
//         this.on("success", function(file, response) {
//           console.log(response);
//         });
//       }
//     });
//   });



// $(document).ready(function () {
//   Dropzone.autoDiscover = false;
//   $("#dZUpload").dropzone({
//       url: "hn_SimpeFileUploader.ashx",
//       addRemoveLinks: true,
//       success: function (file, response) {
//           var imgName = response;
//           file.previewElement.classList.add("dz-success");
//           console.log("Successfully uploaded :" + imgName);
//       },
//       error: function (file, response) {
//           file.previewElement.classList.add("dz-error");
//       }
//   });
// });





jQuery(function () {
  Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element
    // url: "up.php",

    // The configuration we've talked about above
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 100,
    maxFiles: 100,
    paramName: "images",
    maxFilesize: 2, // حداکثر حجم فایل (مگابایت)
    dictFileTooBig: "حجم فایل بیشتر از مقدار مجاز است",


    // The setting up of the dropzone
    init: function () {
      var myDropzone = this;

      // First change the button to actually tell Dropzone to process the queue.
      this.element.querySelector("button[type=submit]").addEventListener("click", function (e) {
        // Make sure that the form isn't actually being sent.
        e.preventDefault();
        e.stopPropagation();
        myDropzone.processQueue();
      });

      // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
      // of the sending event because uploadMultiple is set to true.
      this.on("sendingmultiple", function () {
        // Gets triggered when the form is actually being sent.
        // Hide the success button or the complete form.
      });
      this.on("successmultiple", function (files, response) {
        // Gets triggered when the files have successfully been sent.
        // Redirect user or notify of success.
      });
      this.on("errormultiple", function (files, response) {
        // Gets triggered when there was an error sending the files.
        // Maybe show form again, and notify user of error
      });
    }

  }

});
