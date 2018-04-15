class CookieCanvas {
    constructor(){
        this.canvas = document.querySelector('.cookie-canvas');
        this.canvas.height = this.canvas.width;
        this.context = this.canvas.getContext('2d');
        this.brush = new PaintBrush(this.context);
    }
}

class PaintBrush{
    constructor(context){
        this.context = context;
        this.size = "1";
    }
    stroke(position){
        this.context.strokeStyle = this.color;
        this.context.fillStyle = this.color;
        this.context.beginPath();
        this.context.arc(position.X, position.Y, this.size, 2 * Math.PI, false);
        this.context.stroke();
        this.context.fill();
    }
}