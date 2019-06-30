$(() => {

    getCategory();
    // $.get('/test-get').done((response) => {
    //     console.log(response);
    // }).fail(error => {
    //     console.log(error);
    // })
})


$("#form-create-article").submit((e) => {
    e.preventDefault();

   $.post("/article/create",$("#form-create-article").serialize()).done(response => {
       console.log(response);
   }).fail(error => {
       console.log(error);
   })

})


function getCategory(){
    $.getJSON("/category/all").done((response) => {
        console.log(response)
        response.forEach(categorie => {
            var option =`<option value=${categorie.id}>${categorie.name}</option>`;
            $("#list-categories").append(option);
        });
    }).fail((error,t) => {
        console.log(error);
        console.log(t);
    })
}
