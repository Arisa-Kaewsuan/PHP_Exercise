var black_divs = [];

function start()
{
    var container = document.getElementById("container");
    for (var i = 1; i <= 2000; i++)
    {
        var box = document.createElement("div");
        box.setAttribute("id","x"+i);
        box.className = 'mini'
        var r,g,b;
        r = Math.random()*255;
        g = Math.random()*255;
        b = Math.random()*255;

        box.style.backgroundColor = "rgb("+r+","+g+","+b+"",")";

        box.addEventListener("mouseover", onMouseoverDIV);
        //element.addEventListener("click", mySecondFunction);
        box.addEventListener("mouseout", onMouseoutDIV);   

        container.appendChild(box);
    }
    window.setInterval(onTimerTick, 20);
}

function onTimerTick()
{
    for (var i = 1; i <= 2000; i++)
    {
        if(black_divs.indexOf("x" + i) == -1)
        {
            var box = document.getElementById("x"+i);
            var r,g,b;
            r = Math.random()*255;
            g = Math.random()*255;
            b = Math.random()*255;
            box.style.backgroundColor = "rgb("+r+","+g+","+b+"",")";
        }
    }
}

function onMouseoverDIV()
{
        var r,g,b;
        r = 0;
        g = 0;
        b = 0;
        console.log(typeof this);
        this.style.backgroundColor = "rgb("+r+","+g+","+b+"",")";
        black_divs[black_divs.length] = this.id;
}

function onMouseoutDIV()
{

}

