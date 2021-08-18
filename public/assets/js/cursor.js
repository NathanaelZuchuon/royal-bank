window.onload = () => {
    /* Cursor's Animation */
    let cursor_box = document.querySelector("#cursor-box");

    const moveHandler = (event) => {
        let rem = 20;
        cursor_box.style.left = ( event.pageX - rem ) + "px";
        cursor_box.style.top = ( event.pageY - rem ) + "px";
    };

    const setMousemoveHandler = (func) => {
        window.onmousemove = func;
    }

    setMousemoveHandler(moveHandler);

    window.onmousedown = (event) => {
        if ( event.button === 0 ) {
            setMousemoveHandler(null);
            cursor_box.classList.add('animated');

            setTimeout(() => {
                cursor_box.classList.remove('animated');
                setMousemoveHandler(moveHandler);
            }, 500);
        }
    };
    /* ------------------- */
}
