class PaintBrush {
    constructor(context){
        this.context = context;
        this.size = "1";
    }
    stroke(position){
        this.context.strokeStyle = this.color;
        this.context.fillStyle = this.color;
        this.context.beginPath();
        this.context.arc(position.X, position.Y, this.size, 0, 2 * Math.PI, false);
        this.context.stroke();
        this.context.fill();
    }
}

class CookieCanvas {
    constructor(){
        this.canvas = document.querySelector('.cookie-canvas');
        this.canvas.height = this.canvas.width;
        this.context = this.canvas.getContext('2d');
        this.brush = new PaintBrush(this.context);
        this.canvas.addEventListener('click', function(event){
            this.brush.stroke({X : event.clientX, Y : event.clientY});
        });
    }
    clear(){
        this.context.fillStyle = 'white';
        this.context.fillRect(0, 0, this.canvas.width, this.canvas.height);
    }
}




