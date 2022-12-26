$(document).ready(function(e){
    
    $('.upload').change(function(){
        var input = this;
        var url = $(this).val();
        var targetImage = $(this).parent().find('img');
        console.log('targetImage');
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
         {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                targetImage.attr('src', e.target.result);
            }
           reader.readAsDataURL(input.files[0]);
        }
        else
        {
            alert("Rasm Formati To'g'ri kelmaydi!! ");
            targetImage.attr('src', '/uploads/no_photo.png');
        }
      });  


      $('.delete').on('click',function(e){
        let agreement = confirm('BU elementni O\'chirib Tashlamoqchimisiz');
        if (!agreement){
            return false;
        }

    });




})

