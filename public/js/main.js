let postBtn = document.querySelector('.post-btn');
let categoryBtn = document.querySelector('.category-btn');
let iconPost = document.querySelector('.icon-post');
let togglerBtn = document.querySelector('.toggler-btn');
let togglerBtn2 = document.querySelector('.toggler-btn2');
let iconPost2 = document.querySelector('.icon-post2');

postBtn.style.display = 'block';
categoryBtn.style.display = 'block';
iconPost.style.display = 'none';
iconPost2.style.display = 'none';

togglerBtn.addEventListener("click", hideBtn);
togglerBtn2.addEventListener("click", hideBtn2);

togglerBtn2.style.display = 'none';

function hideBtn(){

        postBtn.style.display = 'none';
        categoryBtn.style.display = 'none';
        iconPost.style.display = 'block';
        iconPost2.style.display = 'block';

        togglerBtn.style.display = 'none';
        togglerBtn2.style.display = 'block';


}

function hideBtn2(){

    postBtn.style.display = 'block';
    categoryBtn.style.display = 'block';
    iconPost.style.display = 'none';
    iconPost2.style.display = 'none';

    togglerBtn2.style.display = 'none';
    togglerBtn.style.display = 'block';

}


