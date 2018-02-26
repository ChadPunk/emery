function exportme() {
    var name = document.getElementById('name').value;
    var company = document.getElementById('company').value;
    var phone = document.getElementById('phone').value;
    var message = document.getElementById('message').value;
   
    window.location = ('mailto:chade2540@gmail.com; jehoopz92@gmail.com?Subject=I would like some info&body=Hello, my name is '+name+'. '+message+'. Company name: '+company+'.  Phone Number: '+phone+' ');
}

