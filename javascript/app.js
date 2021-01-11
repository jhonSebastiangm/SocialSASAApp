$(document).ready(function() {
    console.log('jquery is working!'); 
    Consultarusuarios(); 
    function Consultarusuarios() {
      $.ajax({
        url: 'controls/ConsultaTodosLosUsuarios.php',
        type: 'GET',
        success: function(response) {
          const users = JSON.parse(response);
          let template = '';
          users.forEach(user => {
            template += `
                    <tr userid="${user.id}">
                    <td>${user.id}</td>
                    <td>${user.name}</td>
                    <td>${user.username}</td>
                    <td>${user.email}</td>
                    <td>${user.phone}</td>
                    <td>${user.website}</td>
                    <td>
                      <button class="getPosts btn btn-danger">
                       Consultar Posts 
                      </button>
                    </td>
                    </tr>
                  `
          });
          $('#Usuarios').html(template);
        }
      });
    }
  
    $(document).on('click', '.getPosts',function() {
      if(confirm('Estas seguro que quieres ver este post?')) {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('userid');
        $.ajax({
            url: 'controls/ConsultarPosts.php',
            type: 'GET',
            data: {id: id},
            success: function(response) {
              const posts = JSON.parse(response);
              let template = '';
              posts.forEach(post => {
                template += `
                        <tr postId="${post.id}">
                        <td>${post.userId}</td>
                        <td>${post.id}</td>
                        <td>${post.title}</td>
                        <td>${post.body}</td>
                        <td>
                          <button class="getComents btn btn-danger">
                           Consultar Comentarios 
                          </button>
                        </td>
                        </tr>
                      `
              });
              $('#posts').html(template);
            }
          });
      }
    });

    $(document).on('click', '.getComents',function() {
        if(confirm('Estas seguro que quieres ver este comentario?')) {
          let element = $(this)[0].parentElement.parentElement;
          let id = $(element).attr('postId');
          $.ajax({
              url: 'controls/ConsultarComentarios.php',
              type: 'GET',
              data: {id: id},
              success: function(response) {
                const coments = JSON.parse(response);
                let template = '';
                coments.forEach(coment => {
                  template += `
                          <tr postId="${coment.postId}">
                          <td>${coment.postId}</td>
                          <td>${coment.id}</td>
                          <td>${coment.name}</td>
                          <td>${coment.email}</td>
                          <td>${coment.body}</td>
                          </tr>
                        `
                });
                $('#comentarios').html(template);
              }
            });
        }
      });
  });
  