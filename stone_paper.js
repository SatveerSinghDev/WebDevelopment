var userSelection;
var computerSelection;
var computerScore = 0;
var userScore = 0;
var play = parseInt(prompt("How many time you want to play"));
//console.log(typeof(play));
for(var i=0; i< play; i++){
  userSelection = prompt("Enter Selection Rock,Paper,Scissor");
  console.log("User Selection= " + userSelection);
  var cSelection = Math.random();
  //console.log("Selection Number= " + cSelection);
  if((cSelection >=0 )&&(cSelection <= 0.34))
    {
      computerSelection= "paper";
    }
  else if ((cSelection >= 0.35 )&&(cSelection <= 0.67))
    {
      computerSelection= "scissor";
    }
  else
    {
      computerSelection= "rock";
    }
  console.log("Computer Selection= " + computerSelection);
  if(userSelection == "rock")
    {
      if(computerSelection == "paper")
        {
          computerScore++;

        }
      else if (computerSelection == "scissor")
        {
          userScore++;

        }
      else
        {}
    }
  else if(userSelection == "paper")
    {
      if(computerSelection == "scissor")
        {
          computerScore++;
        }
      else if(computerSelection == "rock")
        {
          userScore++;
        }
      else
        {}
    }
  else if(userSelection == "scissor")
    {
      if(computerSelection == "rock")
        {
          computerScore++;

        }
      else if(computerSelection == "paper")
        {
          userScore++;
        }
      else
        {}
    }
console.log("Computer Score = "+ computerScore);
console.log("User Score = "+ userScore);
}
if (userScore > computerScore )
  {
    console.log("User Wins!!!");
  }
else if (userScore < computerScore)
  {
    console.log("Computer Wins!!!");
  }
else
  {
    console.log("Match Tied!!!");
  }
