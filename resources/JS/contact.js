function email() {
    var name = document.getElementById('name').value;
    var company = document.getElementById('company').value;
    var phone = document.getElementById('phone').value;
    var message = document.getElementById('message').value;
    
    window.location = ('mailto:jehoopz92@gmail.com;chade2540@gmail.com?Subject=I would like some information&body= Hello my name is '+name+'. '+message+'. Below is my contact information. Company Name:'+company+', Phone Number:'+phone+'', "_system");

}