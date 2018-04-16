class CookieCanvas {
    constructor(){
        this.brush = new PaintBrush();
        this.refreshCanvas();
    }
    refreshCanvas(){
        this.canvas = document.querySelector('.cookie-canvas');
        this.canvas.height = this.canvas.width;
        this.context = this.canvas.getContext('2d');
        this.brush.context = this.context;
    }
    redraw(){
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.context.lineJoin = "round";
        for(var i=0; i < this.brush.clickX.length; i++) {
            this.brush.paintByIndex(i);
        }		
    }
    clear(){
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.brush.clean();
    }
}

class PaintBrush{
    constructor(){
        this.painting = false;
        this.clickX = [];
        this.clickY = [];
        this.clickDrag = [];
        this.size = "4";
    }
    addPoint(x, y, dragging){
        this.clickX.push(x);
        this.clickY.push(y);
        this.clickDrag.push(dragging);
    }
    paintByIndex(i){
        this.context.beginPath();
        this.context.strokeStyle = this.color;
        this.context.lineWidth = this.size;  
        if(this.clickDrag[i] && i){
            this.context.moveTo(this.clickX[i-1], this.clickY[i-1]);
        }else{
            this.context.moveTo(this.clickX[i]-1, this.clickY[i]);
        }
        this.context.lineTo(this.clickX[i], this.clickY[i]);
        this.context.closePath();
        this.context.stroke();
    }
    clean(){
        this.clickX = [];
        this.clickY = [];
        this.clickDrag = [];
    }
}