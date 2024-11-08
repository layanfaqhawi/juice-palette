console.log(phpData);

function showTags(data) 
{
    data.forEach(item => {
        // Assuming 'value' is the condition to show a tag
        if (item.value === 'show') {
            document.getElementById(`tag${item.id}`).style.display = 'block';
        }
    });
}

showTags(phpData);