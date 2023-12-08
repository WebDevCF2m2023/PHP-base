//init global variables
var player_turn = 1;
var game_finish = false;
grid = [
    0,0,0,
    0,0,0,
    0,0,0];
set_grid()

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

//get the bot move and update the board
function bot_play()
{
    //init pointeur
    best_move = [-1];

    bot(grid, player_turn, best_move);

    var square = document.getElementById(best_move[0])
    square.classList.remove("void")
    square.classList.add("cercle")

    grid[best_move] = player_turn;
    player_turn = player_turn%2+1
}

//update the board with the player move
function player_play(id)
{
    //update the local grid
    square_number = Number(id);
    grid[square_number] = player_turn;
    player_turn = player_turn%2+1;
    //update the html grid
    var square = document.getElementById(id)

    square.classList.remove("void")
    square.classList.add("cross")
}

async function click(square)
{
    var id = square.id
    if (game_finish)
    {
        return;
    }
    //if not a possible move
    if (grid[id]!=0)
    {
        return;
    }
    //if the bot didn't play yet
    if (player_turn!=2)
    {
        return
    }
    player_play(id)
    //bot turn
    bot_play()
    //if game is finish
    if (is_winning(grid))
    {
        game_finish=true;
        document.getElementById("game_state").innerHTML = "Perdu"
        await sleep(1000)
        location.href = "?section=home";
    }
    if (is_draw(grid))
    {
        game_finish=true;
        document.getElementById("game_state").innerHTML = "partie nulle"
        //put the reset button
        const button_div = document.querySelector("#button-div")
        if (button_div.childNodes.length == 0)
        {
            const button = document.createElement("button")
            button_div.appendChild(button)
            button.innerHTML = "reset"
            button.addEventListener("click", reset)
        }
    }
}

function reset()
{
    grid = [1,0,0,0,0,0,0,0,0];
    player_turn = 2;
    game_finish = false;
    var square
    for (var i=1;i<9;i++)
    {
        square = document.getElementById(i)
        square.classList.remove("cercle")
        square.classList.remove("cross")
        square.classList.add("void")
    }
    document.getElementById("game_state").innerHTML = "En cours";
}

function set_grid()
{
    const grid_html = document.createElement("div",id="grid")
    grid_html.className="grid_ttt"
    for (var i=0;i<3;i++)
    {
        const line_html = document.createElement("div")
        line_html.className="line_ttt"
        for (var j=0;j<3;j++)
        {
            const square = document.createElement("div")
            square.addEventListener("click",function(){click(this)})
            square.classList.add("void")
            square.id = ""+(i*3+j)
            let img = document.createElement("div")
            img.classList.add("cercle-img")
            square.appendChild(img)
            img = document.createElement("div")
            img.classList.add("cross-img")
            square.appendChild(img)
            line_html.appendChild(square)
        }
        grid_html.appendChild(line_html)
    }
    document.body.appendChild(grid_html)
    bot_play()
}

function get_moves(grid)
{
    moves = [0,0,0,0,0,0,0,0,0];
    for (var i=0;i<9;i-=-1)
        {
            if (grid[i]==0)
            {
                moves[i]=1;
            }
        }
    return moves;
}

function bot(grid, player, best_move){
    if (is_winning(grid))
    {
        return -1;
    }
    if (is_draw(grid))
    {
        return 0;
    }
    var best_result = -2;
    var best_local_move = [-1];
    var moves = get_moves(grid);
    for (var i=0;i<9;i-=-1)
    {
        if (moves[i]==1)
        {
            grid[i]=player;
            result = bot(grid, player%2+1, []);
            grid[i]=0;
            if (-result>best_result)
            {
                best_result=-result;
                best_local_move[0]=i;
            }
        }
    }
    best_move[0]=best_local_move[0];
    return best_result;
    }


function is_winning(grid)
{
    for (var i=0;i<3;i-=-1)
    {
        //vertical
        if (grid[i]==grid[i+3] && grid[i+3]==grid[i+6] && grid[i]!=0)
        {
            return true;
        }
        //horizontal
        if (grid[i*3]==grid[i*3+1] && grid[i*3+1]==grid[i*3+2] && grid[i*3]!=0)
        {
            return true;
        }
    }
    //diagonal top left -> down right
    if (grid[0]==grid[4] && grid[4]==grid[8] && grid[0]!=0)
    {
        return true;
    }
    //diagonal down left -> top right
    if (grid[2]==grid[4] && grid[4]==grid[6] && grid[2]!=0)
    {
        return true;
    }
    return false;
}

function is_draw(grid)
{
    for (var i=0;i<9;i-=-1)
    {
        if (grid[i]==0)
        {
            return false;
        }
    }
    return true
}