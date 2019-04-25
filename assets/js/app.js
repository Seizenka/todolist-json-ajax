let ajax_get = (url, callback) => {
    let xmlhttp = new XMLHttpRequest();
    let data;
    xmlhttp.onreadystatechange = () => {
      if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        console.log("response:" + xmlhttp.responseText);
        try {
          data = JSON.parse(xmlhttp.responseText);
        } catch (err) {
          console.log(err.message + xmlhttp.responseText);
          return;
        }
        callback(data);
      }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
  };
  
  ajax_get("todo.json", data => {
    //   document.getElementById("task").innerHTML = data["name"];
    console.log(data);
    //   let html = "<h2>" + data["name"] + "</h2>";
    let html = "<ul>";
    let task = "<ul>";
    for (let i = 0; i < data.length; i++) {
      console.log(data[i]["statut"]);
      if (data[i]["statut"] === false) {
        html += "<li>" + data[i]["name"] + "</li>";
      } else {
        task += "<li>" + data[i]["name"] + "</li>";
      }
    }
    html += "</ul>";
    task += "</ul>";
    console.log(task);
    document.getElementById("task").innerHTML = task;
    document.getElementById("archive").innerHTML = html;
  });
  