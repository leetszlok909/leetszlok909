
const commentList=document.querySelector('#comment-list');

function renderComment(doc){
	
let li=document.createElement('li');
let name=document.createElement('span');
let comment =document.createElement('span');

li.setAttribute('data-id',doc.id);
name.textContent=doc.data().name;
comment.textContent=doc.data().comment;



li.appendChild (document.createElement ('div'));
li.appendChild(name);
li.appendChild (document.createTextNode (" said : "));
li.appendChild (document.createTextNode (" "));
li.appendChild(comment);

commentList.appendChild(li);


}

db.collection('comment').get().then((snapshot)=>{
snapshot.docs.forEach(doc=>{
renderComment(doc);

})
})