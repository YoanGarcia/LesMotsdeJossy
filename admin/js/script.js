var lien = document.querySelectorAll('.divEditTheme');
var xhr = new XMLHttpRequest();
var xhr2 = new XMLHttpRequest();

var btn = function(){
    var btn_modif = document.querySelectorAll('.btn_modif');
    var del_activite = document.querySelectorAll('.del_activite');

    del_activite.forEach(function(value, index, array){
        value.addEventListener('click', function(){
            var id = this.getAttribute('data-idActivite');
            var formData = new FormData();

            formData.append("id", id);
            formData.append("table", 'activites');
            var request = new XMLHttpRequest();

            request.open("POST", "controller/ajax/delete.php");

            request.onreadystatechange = function(){
                if(request.readyState === XMLHttpRequest.DONE && request.status === 200) {
                    if(request.response == 'ok'){
                        $('.activite' + id).remove();
                    }
                }
            };

            request.send(formData);
        });
    });

    btn_modif.forEach(function(value, index, array){
        value.addEventListener('click', function(){
            var newID = this.getAttribute('data-idNews');
            var theme = document.querySelector('.new'+ newID).getAttribute('data-theme');                    
            var content = document.querySelector('.new'+ newID +' .contentnews').textContent;
            var hide = document.querySelector('.new'+ newID +' p.phide').getAttribute('data-hide');
            var img_link = document.querySelector('.new'+ newID +' img').getAttribute('src');
            var hide_checked = '';

            if(hide == "1"){
                hide_checked = 'checked';                        
            }

            document.querySelector('.new'+ newID).innerHTML = '' +
            '<img id="preview" src="'+ img_link + '"><br>' +
            '<form method="POST" enctype="multipart/form-data" class="form_modif">'+
                '<label for="img_link">Image</label>' +
                '<input type="hidden" name="ajax" value="ajax">' +
                '<input type="hidden" name="id" value="'+ newID +'">' +
                '<input type="hidden" name="theme" value="'+ theme +'">' +
                '<input type="hidden" name="img" value="'+ img_link.replace("../", "") +'">' +
                '<input type="file" name="picture" id="picture"><br>' +
                '<label for="content">Contenu</label><br>' +
                '<textarea id="content" name="content" rows="10" cols="50">' + content + '</textarea><br>' +
                '<input type="checkbox" name="hide" value="1" '+ hide_checked +'>' +
                '<input type="submit" value="Valider">' + 
            '</form>';

            var img_new = document.querySelector('.new'+ newID +' #picture');
            var preview = document.querySelector('.new'+ newID +' #preview');

            img_new.addEventListener('change', function(e){
                preview.setAttribute('src', window.URL.createObjectURL(img_new.files[0]));
            });

            form_modif = document.querySelector('.new'+ newID +' .form_modif');

            form_modif.addEventListener('submit', function(e){
                e.preventDefault();

                var request = new XMLHttpRequest();

                request.open("POST", "controller/ajax/editNews.php");

                request.onreadystatechange = function(){
                    if(request.readyState === XMLHttpRequest.DONE && request.status === 200) {
                        document.querySelector('.new'+ newID).innerHTML = request.response;
                        btn();
                    }
                };

                request.send(new FormData(form_modif));
            });
        });
    });
};

lien.forEach(function(value, index, array){
    value.addEventListener('click', function(){
        var theme = this.getAttribute('data-theme');

        if(theme === 'acceuil'){
            $('.').hide();
        }
        else{
            $('.conteneuractivite').show();
        }

        document.querySelector('.input_theme').setAttribute('value', theme);

        var method = "GET",
            url = "controller/ajax/getNews.php?theme=" + this.getAttribute('data-theme');

        xhr.open(method, url, true);
        xhr.onreadystatechange = function () {
            if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                document.querySelector('.news').innerHTML = xhr.response;
                btn();
            }
        };
        xhr.send();

        var url = "controller/ajax/getActivite.php?theme=" + this.getAttribute('data-theme');

        xhr2.open(method, url, true);
        xhr2.onreadystatechange = function () {
            if(xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
                document.querySelector('.activite').innerHTML = xhr2.response;
                btn();
            }
        };
        xhr2.send();
        
    });
});

var check_vid = document.querySelector('#check_vid');
var vid =  document.querySelector('#link_vid');
var pic = document.querySelector('#picture_a');


check_vid.addEventListener('click', function(){
    if(check_vid.checked){
        pic.style.display = 'none';
        vid.style.display = 'inline';
    }
    else{
        pic.style.display = 'inline';
        vid.style.display = 'none';
    }
});