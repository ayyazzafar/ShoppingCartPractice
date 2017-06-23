function number_format(number)
{
    // convert into string
    var numberString  = number.toString();
    console.log(numberString[2]);
    var newNumberStr = '';
    for(var index = numberString.length-1; index>=0; index--){
        var number = numberString[index];
        newNumberStr+=number;

        if((index)%3==0 && index!==0)
        {
            newNumberStr +=",";
        }
    };

    return newNumberStr;
}