const dropArea = document.getElementById("drop-area");
        const inputFile = document.getElementById("input-file");
        const imageView = document.getElementById("img-view");
        const fileNameDisplay = document.getElementById("nombre");

        inputFile.addEventListener("change", uploadFile);
        function uploadFile() {
            const file = inputFile.files[0];
            if (!file) return;

            const fileType = file.type;
            const fileName = file.name;
            const fileSize = (file.size / 1024 / 1024).toFixed(2) + ' MB';

            const reader = new FileReader();
            reader.onload = function(event) {
                const fileURL = event.target.result;

                if (fileType.startsWith("image/")) {
                    imageView.innerHTML = `<img src="${fileURL}" style="max-width: 100%; max-height: 100%;">`;
                } else if (fileType === "application/pdf") {
                    imageView.innerHTML = `<embed src="${fileURL}" type="application/pdf" width="100%" height="100%">`;
                } else if (fileType.startsWith("text/")) {
                    imageView.innerHTML = `<pre>${event.target.result}</pre>`;
                } else if (fileName.endsWith(".exe")) {
                    imageView.innerHTML = `<div>
                                            <p><strong>File Name:</strong> ${fileName}</p>
                                            <p><strong>File Size:</strong> ${fileSize}</p>
                                            <p><strong>Type:</strong> Executable File (.exe)</p>
                                           </div>`;
                } else {
                    imageView.textContent = "File type not supported for preview";
                }
                imageView.style.border = 0;
                fileNameDisplay.style.color = 'white';
                fileNameDisplay.textContent = `${fileName}`;
            }

            if (fileType.startsWith("text/")) {
                reader.readAsText(file);
            } else {
                reader.readAsDataURL(file);
            }
        }

        dropArea.addEventListener("dragover", function(e) {
            e.preventDefault();
        });

        dropArea.addEventListener("drop", function(e) {
            e.preventDefault();
            inputFile.files = e.dataTransfer.files;
            uploadFile();
        });