console.log("Get data file loaded!");
function ajax_get_json(){
    var hr = new XMLHttpRequest();
    var postsResults = document.getElementById("posts-container");
    var post = document.getElementById("post-container");
    hr.open("GET", "https://www.getonfocus.com/data-src/posts.json", true);
    hr.setRequestHeader("Content-type", "application/json");
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var data = JSON.parse(hr.responseText);            
            postsResults.innerHTML = "";
            for (var obj in data) {
                postsResults.innerHTML += '<div class="post col-md-4">' +
                    '<div class="post-thumbnail"><a href="'+ data[obj].link +'"><img src="img/blog-1.jpg" alt="..." class="img-fluid"></a></div>' +
                    '<div class="post-details">' +
                    '<div class="post-meta d-flex justify-content-between">' +
                        '<div class="date">'+ data[obj].date +' | '+ data[obj].year +'</div>' +
                        '<div class="category"><a href="#">Business</a></div>' +
                    '</div><a href="'+ data[obj].link +'">' +
                        '<h3 class="h4">'+ data[obj].heading +'</h3></a>' +
                    '<p class="text-muted">'+ data[obj].description +'</p>' +
                    '</div>' +
                '</div>';
            }
        }
    }
    hr.send(null);
    postsResults.innerHTML = "requesting...";
}
