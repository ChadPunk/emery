function exportme() {
    var trucks = document.getElementById('name').value;
    var stops = document.getElementById('company').value;
    var piece = document.getElementById('phone').value;
    var piece = document.getElementById('message').value;
    window.location = ('mailto:lberuashvili@uste3.com;dpatterson@uste3.com;mkrause@uste3.com;mdurphy@uste3.com;cmuniz@uste3.com;emmett.gilbert@conns.com;Aniouka.Cuba@conns.com;terry.johnston@conns.com;alan.lovett@conns.com;monique.lavan@conns.com;henry.milton@conns.com;jhurley@uste3.com;aleplatt@uste3.com;jemery@uste3.com;spowell@uste3.com?Subject=Conns Houston Export for  with an average of &body=Houston has been exported with ' + name + ' trucks, ' + company + ' stops and ' + phone + ' pieces. Please refresh DT and let me know when drivers are assigned, thank you!');
}

