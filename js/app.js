
const form = document.querySelector('#add-user-form');

// getting data
/* 
db.collection('Users').get().then((snapshot) => {
    // console.log(snapshot.docs);
    snapshot.docs.forEach(doc => {
    	// console.log(doc.data());
    	renderUsers(doc);
    })
});
*/
function updateUsers(doc){
	var results = document.getElementById("render-users");
	results.innerHTML += 
    '<div id=' + doc.id + ' class="">' +
    	'<div class="media">' +
			'<div class="media-left--content">' +
				'<img src="img/avatar-4.jpg" class="media-object">' +
			'</div>' +
			'<div class="media-body--content">' +
				// '<h4 class="media-heading">' + doc.data().firstName + ' ' + doc.data().lastName +'</h4>' +
				'<h4 class="media-heading"><span class="first-name">' + doc.data().firstName + '</span>' + " " + '<span class="last-name">' + doc.data().lastName + '</span></h4>' +
				'<p>City: ' + doc.data().city + '</p>' +						  								    
			'</div>' +
			'<div class="media-controls--content">' +
				'<button id="updateUser" data-id="' + doc.id + '" type="button" class="btn" onclick="updateUser(this)" data-toggle="modal" data-target="#myModal">Update</button>' +
				// '<button id="updateUser" type="button" class="btn" onclick="updateUser()">Update</button>' +
				// '<button id="updateUser" data-id="' + doc.id + '" type="button" class="btn" onclick="updateUser(this)">Update</button>' +
				// '<button id="deleteUser" data-id="' + doc.id + '" type="button" class="btn" onclick="removeUser(this.id)">Delete</button>' +
				'<button id="deleteUser" data-id="' + doc.id + '" type="button" class="btn" onclick="removeUser(this)">Delete</button>' +
			'</div>' +
		'</div>' +
    '</div>';
}

function resetUsers(id) {	
	console.log("RESET")
	let resetUserId = id;
	let resetUserContent = document.getElementById(resetUserId);
	let resetUserContentHeading = resetUserContent.querySelector('.media-heading .first-name');
	resetUserContentHeading.innerHTML = document.getElementById("fName").value;
	// document.getElementById("lName").value = doc.data().lastName;
	// document.getElementById("city").value = doc.data().city;
	// console.log(reserUserContent);
	// let li = users.querySelector('[data-id=' + change.doc.id + ']');
	// resetUserId.reserUserId = "";
	// let reserUserContent = document.querySelector(resetUserId);
	// console.log(reserUserContent);
}

/* ↓↓↓ Delete User ↓↓↓ */
function removeUser(event){
	// console.log(event);
	// console.log(event.innerHTML);
	// console.log(event.getAttribute('data-id'));
	usrId = event.getAttribute('data-id');
	console.log(usrId);
	db.collection('Users').doc(usrId).delete();
}
/* ↑↑↑ Delete User ↑↑↑ */

/* ↓↓↓ Update User ↓↓↓ */
function updateUser(ev){
	// console.log("Update btn Clicked");
	updateUsrId = ev.getAttribute('data-id');
	// console.log("Update btn Clicked: " + updateUsrId);
	// console.log(doc.data());
	document.getElementById("identification").value = updateUsrId;
	db.collection('Users').get().then((snapshot) => {
	    // console.log(snapshot.docs);
	    snapshot.docs.forEach(doc => {
	    	if (updateUsrId === doc.id) {
	    		console.log(doc.data());
	    		document.getElementById("fName").value = doc.data().firstName;
	    		document.getElementById("lName").value = doc.data().lastName;
	    		document.getElementById("city").value = doc.data().city;

	    		/* ↓↓↓ Confirm Update ↓↓↓ */
				let confirmUpdate = document.getElementById("confirm-update");
				confirmUpdate.addEventListener('click', (e) => {
					e.preventDefault();
					db.collection('Users').doc(updateUsrId).update({
						firstName: document.getElementById("fName").value,
						lastName: document.getElementById("lName").value,
						city: document.getElementById("city").value
					});							
				});
				/* ↑↑↑ Confirm Update ↑↑↑ */						
	    	};		    			    	
	    });
	});
}
/* ↑↑↑ Update User ↑↑↑ */









// saving data - add new entry to the db
form.addEventListener('submit', (e) => {
	e.preventDefault();
	db.collection('Users').add({
		firstName: form.firstName.value,
		lastName: form.lastName.value,
		city: form.city.value
	});
	// reset the form
	form.firstName.value = '';
	form.lastName.value = '';
	form.city.value = '';
});

// real-time listener
db.collection('Users').orderBy('city').onSnapshot(snapshot => {
	let changes = snapshot.docChanges();
	console.log(changes);
	changes.forEach(change => {
		console.log(change.doc.data());
		if(change.type == 'added'){
			// users.innerHTML = "";
			
			updateUsers(change.doc);
			
		} 
		else if(change.type == 'modified'){
			resetUsers(change.doc.id);
			// updateUsers(change.doc);			
		}
		else if (change.type == 'removed') {
			let domUserElement = document.getElementById(change.doc.id);
			domUserElement.remove();
		}
		
	});
});

































