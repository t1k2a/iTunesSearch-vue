class pedia {

    clickContact() {
        document.getElementById("contact")?.addEventListener('click', () => modal ? modal.style.display = 'block' : null);
    }
}


var click_contact = new pedia();
var modal = document.getElementById('modal');
click_contact.clickContact();
