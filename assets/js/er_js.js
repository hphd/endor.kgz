// $(document).ready(function () {
//   $('#er_textarea_edit').summernote();
// });

function er_select() {
  let sel=document.getElementById('er_sel_id'),
      value_select = sel.options[sel.selectedIndex].value;

  if (value_select == 3){
    $('.er_title_js').html('Имя'); 
    $('.er_text_js').html('Биография'); 
    $('.er_collective_show').css("display", "block");
    $('.er_final_div').css("display", "block");
    $('.er_url').css("display", "none");
  } else if (value_select == 4) {
    $('.er_url').css("display", "block");
    $('.er_collective_show').css("display", "none");
    $('.er_final_div').css("display", "none");
  } else {
    $('.er_final_div').css("display", "block");
    $('.er_collective_show').css("display", "none");
    $('.er_url').css("display", "none");
    $('.er_title_js').html('Заголовок');
    $('.er_text_js').html('Текст'); 
  }
}

let BASE_URL ="http://endourology.com/";
  function ajax(id=0){
    let val = $(".er_sel_2").val();
    $.ajax({
      url: BASE_URL + 'pages/er_format_ajax/' + id+'/'+val,
      success: function (data) {
        $('.er_ul').html(data);
      }
    });
  }	