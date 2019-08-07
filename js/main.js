
    function time(){
        let time = new Date();
        let ltime = moment(time).format('DD/MM/YYYY HH:mm:ss');
        $("#time").html('<i class="fa fa-clock-o" ></i> ' + ltime);
    }
    
    function makeList(list){
        let lapps = "";
        for (let i in list){
            const row = list[i];
            let img = "img/default.jpg";
            if (row.img != "") {img = row.img;}
            
            let lapp = '<div class="col-sm-6 col-ms-3 col-xl-4 ">';
                lapp += '<div class="card">';
                lapp += '   <img class="card-img-botton imgmax" src="'+img+'" alt="Card image">';
                lapp += '       <div class="card-body">';
                lapp += '                <h4 class="card-title">'+row.name+'</h4>';
                lapp += '                <p class="card-text textmax">'+row.describe+'</p>';
            if (row.url) {
                lapp += '           <a href="'+row.url+'" class="btn btn-primary"><i class="fa fa-cube"></i> ir app</a>';
            }
            if (row.reposer) {
                lapp += '           <a href="'+row.reposer+'" target="_blank" class="btn btn-primary"><i class="fa fa-github"></i> ir github</a>';
            }
                lapp += '       </div>';
                lapp += '   </div>';
                lapp += '</div>';
            lapps += lapp;
        }
        $("#lapps").html(lapps);
    }
    
    
    
    setInterval(time,1000);