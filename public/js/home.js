
$(() => {
    getAllArticles();
    getCategory();
})


function getAllArticles(){
    $.getJSON('/article/all').done(response => {
        console.log(response);
        response.forEach( article =>  {
            // statements
        var article = `
                <div class="article">
                    <div class="article-header">
                        <img class="card-img-top" src="img/article.png" alt="Card image cap" height = '100px' width='150px'>
                        <div>
                            <h2 class="article-title">${article.title}</h2>
                            <p class="article-content">${article.content.substring(0, 300)}...</p>
                            <a href="#" class="article-btn-plus" onclick="readArticle('${article.slug}')" style="margin-top: 7px">Plus &rarr;</a>
                        </div>
                    </div>
                    <div class="article-footer">
                        <img src="icons/comment.svg" width="20px" height="20px">
                        Posté le ${article.created_at}
                    </div>
                </div>
            `;

            $("#article").append(article);
        });
    }).fail((error,t) => {
        console.log(error)
        console.log(t)
    })
}

function getCategory(){
    $.getJSON("/category/all").done((response) => {
        console.log(response)
        response.forEach(categorie => {
            var categorie =`
                    <div class="col-lg-6" id="categorie">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">${categorie.name}</a></li>
                        </ul>
                    </div>
                `;
            $("#categorie").append(categorie);
        });
    }).fail((error,t) => {
        console.log(error);
        console.log(t);
    })
}
function readArticle(slug){
    window.location.href="articles?title="+slug;
}
