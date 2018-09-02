function staus_active(question_id)
{
   var status_active_url = base_url + "admin/question/change_question_status";
   $.ajax({
      url: status_active_url,
      type: 'POST',
      data: {question_id:question_id , status:1 },
      success: function(res) {
         var response = JSON.parse(res);
         if (response.status == "success") {
            swal({ title: response.message,icon: "success",button: "Ok" });
         } else {
            swal({ title: response.message,icon: "error",button: "Ok" });
         }
      },
      error: function(response) {
         debugger ;  
      }
   });
}
function status_deactive(question_id)
{
   var status_deactive_url = base_url + "admin/question/change_question_status";
   $.ajax({
      url: status_deactive_url,
      type: 'POST',
      data: {question_id:question_id , status:0 },
      success: function(res) {
         var response = JSON.parse(res);
         if (response.status == "success") {
            swal({ title: response.message,icon: "success",button: "Ok" });
         } else {
            swal({ title: response.message,icon: "error",button: "Ok" });
         }
      },
      error: function(response) {
         debugger ;  
      }
   });
}