function closeSidebar(){
    var sidebar = document.getElementById('sidebar');
    var value = sidebar.getAttribute('value');
    var btn = document.getElementById('commander');
    //var link = document.getElementById('link');
    var link = document.getElementsByTagName('label');
    if(value=='true')
    {
        //sidebar.style.visibility='hidden';
        sidebar.style.width='70px';
        
        link.style.visibility ='hidden';
        btn.innerHTML=">>";
        sidebar.setAttribute('value','false');
        
    }
    if(value=='false')
    {
        sidebar.style='width: 280px';
        link.style.display = 'none';
        btn.innerHTML="<<";
        sidebar.setAttribute('value','true');
    }
    
}