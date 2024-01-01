function copyToClipboard(content) {
  // Create a temporary textarea element
  const tempTextarea = document.createElement('textarea');
  tempTextarea.value = content;

  // Append the textarea to the document
  document.body.appendChild(tempTextarea);

  // Select the text in the textarea
  tempTextarea.select();
  tempTextarea.setSelectionRange(0, 99999); /* For mobile devices */

  // Copy the selected text to the clipboard
  document.execCommand('copy');

  // Remove the temporary textarea
  document.body.removeChild(tempTextarea);

  // You can add additional logic or UI feedback here if needed
  alert('Content copied to clipboard: ' + content);
}