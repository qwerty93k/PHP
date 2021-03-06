<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kliento puse</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        {{-- JQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <button id="show-add-image-modal" data-bs-toggle="modal" data-bs-target="#addImgModal">Add Image</button> {{--  issaukia modal --}}
        <div class="container">
            <table id="images" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Alt</th>
                        <th>URL</th>
                        <td>Description</td>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

            {{-- Pagination buttons --}}
            <div class="button-container"></div> 

            <table class="template d-none">
                <tr>
                  <td class="col-image-id"></td>
                  <td class="col-image-title"></td>
                  <td class="col-image-alt"></td>
                  <td class="col-image-url"></td>
                  <td class="col-image-description"></td>
                  <td>
                    <button class="btn btn-danger delete-image" type="submit" data-imageid="">DELETE</button>
                    <button type="button" class="btn btn-primary show-image" data-bs-toggle="modal" data-bs-target="#showImgModal" data-imageid="">Show</button>
                    <button type="button" class="btn btn-secondary edit-image" data-bs-toggle="modal" data-bs-target="#editImgModal" data-imageid="">Edit</button>
                  </td>
                </tr>  
            </table>  
        </div>
        
        {{-- ADD IMG --}}

        <div class="modal fade" id="addImgModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Img</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="ajaxForm">
                    <div class="form-group">
                        <label for="image_title">Img Title</label>
                        <input id="image_title" class="form-control create-input" type="text" name="image_title" />
                        <span class="invalid-feedback input_image_title">
                        </span>
                      </div>
                    <div class="form-group">
                        <label for="image_alt">Alt</label>
                        <input id="image_alt" class="form-control create-input" type="text" name="image_alt" />
                        <span class="invalid-feedback input_image_alt">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="image_url">Url</label>
                        <input id="image_url" class="form-control create-input" type="text" name="image_url" />
                        <span class="invalid-feedback input_image_url">
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="image_description">Description</label>
                        <input id="image_description" class="form-control create-input" type="text" name="image_description" />
                        <span class="invalid-feedback input_image_description">
                        </span>  
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="add-img" type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

          {{-- EDIT MODAL --}}

          <div class="modal fade" id="editImgModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Img</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="ajaxForm">
                    <input type="hidden" id="edit_image_id" name="image_id" />
                    <div class="form-group">
                        <label for="image_title">Image Title</label>
                        <input id="edit_image_title" class="form-control" type="text" name="image_title" />
                    </div>
                    <div class="form-group">
                        <label for="image_alt">Image Alt</label>
                        <input id="edit_image_alt" class="form-control" type="text" name="image_alt" />
                    </div>
                    <div class="form-group">
                        <label for="image_url">Image Url</label>
                        <input id="edit_image_url" class="form-control" type="text" name="image_url" />
                    </div>
                    <div class="form-group">
                        <label for="image_description">Image Description</label>
                        <input id="edit_image_description" class="form-control" type="text" name="image_description" />
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="update-image" type="button" class="btn btn-primary update-image">Update</button>
                </div>
              </div>
            </div>
          </div>

        <script>
            $(document).ready(function(){
                console.log('Jquery veikia');
            })

            let csrf = 'test'; // nesusikuria ant head tokenas be auth modulio

            function createRowFromHtml(imageId, imageTitle, imageAlt, imageUrl, imageDescription) {
                $(".template tr").removeAttr("class");
                $(".template tr").addClass("image"+imageId);
                $(".template .delete-image").attr('data-imageid', imageId );
                $(".template .show-image").attr('data-imageid', imageId );
                $(".template .edit-image").attr('data-imageid', imageId );
                $(".template .col-image-id").html(imageId);
                $(".template .col-image-title").html(imageTitle);
                $(".template .col-image-alt").html(imageAlt);
                $(".template .col-image-url").html(imageUrl);
                $(".template .col-image-description").html(imageDescription);
    
                 return $(".template tbody").html();
                }

                $(document).on('click', '.button-container button', function(){ // piesia lentele su pagination
                    let page= $(this).attr('data-page');
                    $.ajax({
                        type: 'GET',
                        url: page,
                        data: {csrf:csrf},
                        success: function(data) {
                            $('#images tbody').html('');//isvalo lentele
                            $('.button-container').html('');//isvalo mygtukus

                            $.each(data.data, function(key, image){ //braizo lentele
                                let html;
                                html = createRowFromHtml(image.id, image.title, image.alt, image.url, image.description);
                                $('#images tbody').append(html);
                            });

                            $.each(data.links, function(key, link){ // braizo mygtukus

                                let button;
                                if (link.url != null){
                                    if(link.active == true){
                                        button = "<button class='btn btn-primary active' type='button' data-page='"+link.url+"'>"+link.label+"</button>";
                                    } else {
                                        button = "<button class='btn btn-primary' type='button' data-page='"+link.url+"'>"+link.label+"</button>";
                                    }
                                }
                                $('.button-container').append(button);
                            });
                            console.log(data);
                        }
                    });

                });

                $.ajax({ // pradiniu uzkrovimu piesia lentele
                    type: 'GET',
                    url: 'http://127.0.0.1:8000/api/images',
                    data: {csrf:csrf},
                    success: function(data) {
                        $.each(data.data, function(key, image){ //braizo lentele
                            let html;
                            html = createRowFromHtml(image.id, image.title, image.alt, image.url, image.description);
                            $('#images tbody').append(html);
                        });

                        $.each(data.links, function(key, link){ // ar nuspaustas mygtukas?
                            
                            let button;
                            if (link.url != null){
                                if(link.active == true) { 
                                    button = "<button class='btn btn-primary active' type='button' data-page='"+link.url+"'>"+link.label+"</button>";
                                } else {
                                button = "<button class='btn btn-primary' type='button' data-page='"+link.url+"'>"+link.label+"</button>";
                                }
                            }
                            $('.button-container').append(button);
                        });

                        console.log(data.links);

                    }
                });

                $(document).on('click', '#add-img', function(){ // prideti img
                
                    let image_title = $('#image_title').val(); //reiksmes is modal input lauku
                    let image_alt = $('#image_alt').val();
                    let image_url = $('#image_url').val();
                    let image_description = $('#image_description').val();

                    $.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/api/images',
                        data: {image_title:image_title, image_alt:image_alt, image_url:image_url, image_description:image_description},
                        success: function(data) {
                            console.log(data)
                        }
                    });

                    $.ajax({ // sukurus img grazina i pirma puslapi
                    type: 'GET',
                    url: 'http://127.0.0.1:8000/api/images',
                    data: {csrf:csrf},
                    success: function(data) {
                        $('#images tbody').html('');//isvalo lentele
                        $('.button-container').html('');//isvalo mygtukus
                        $.each(data.data, function(key, image){ //braizo lentele
                            let html;
                            html = createRowFromHtml(image.id, image.title, image.alt, image.url, image.description);
                            $('#images tbody').append(html);
                        });
                        console.log(data.links);

                        $.each(data.links, function(key, link){ // ar nuspaustas mygtukas?
                            
                            let button;
                            if (link.url != null){
                                if(link.active == true) { 
                                    button = "<button class='btn btn-primary active' type='button' data-page='"+link.url+"'>"+link.label+"</button>";
                                } else {
                                button = "<button class='btn btn-primary' type='button' data-page='"+link.url+"'>"+link.label+"</button>";
                                }
                            }
                            $('.button-container').append(button);
                        });
                    }
                });
            })

            // update-img (2) // reik padaryt kad po update atsinaujintu psl ar grazintu i pirma
            $(document).on('click', '#update-image', function() {
                let imageid = $('#edit_image_id').val();
                let image_title = $('#edit_image_title').val();
                let image_alt = $('#edit_image_alt').val();
                let image_url = $('#edit_image_url').val();
                let image_description = $('#edit_image_description').val();
                $.ajax({
                    type: 'PUT',
                    url: 'http://127.0.0.1:8000/api/images/' + imageid,
                    data: {image_title:image_title, image_alt:image_alt, image_url:image_url, image_description:image_description},
                    success: function(data) {
                        console.log(data);
                    }
                });
            });

            //atidaro forma su duomenimis (1)
            $(document).on('click', '.edit-image', function() {
                let imageid = $(this).attr('data-imageid');
                $.ajax({ // SHOW
                    type: 'GET',
                    url: 'http://127.0.0.1:8000/api/images/'+imageid,
                    success: function(data) {
                        $('#edit_image_id').val(data.id);
                        $('#edit_image_title').val(data.title);
                        $('#edit_image_alt').val(data.alt);
                        $('#edit_image_url').val(data.url);
                        $('#edit_image_description').val(data.description);
                    }
                });
            });

            // DELETE // reik perkrauti puslapi

            $(document).on('click', '.delete-image', function(){
                let imageid = $(this).attr('data-imageid');
                $.ajax({
                    type: 'DELETE',
                    url: 'http://127.0.0.1:8000/api/images/'+imageid,
                    success: function(data) {
                        console.log(data)
                    }
                });
            })

            

             
        </script>
    </body>
</html>
