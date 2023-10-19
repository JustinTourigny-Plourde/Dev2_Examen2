document.addEventListener("DOMContentLoaded", function() {
    var postList = document.getElementsByClassName("post");

    for (var i = 0; i < postList.length; i++) {
        (function(post) {
            var comments = post.getElementsByClassName("comment");

            post.addEventListener("click", function(event) {
                // Loop through comments associated with this post and toggle their visibility
                for (var j = 0; j < comments.length; j++) {
                    var comment = comments[j];
                    if (comment.style.display === "none" || comment.style.display === "") {
                        comment.style.display = "block";
                    } else {
                        comment.style.display = "none";
                    }
                }
                event.preventDefault();
            });
        })(postList[i]);
    }
});
