 
<input type="button" value="Rogner cette photo" id="resize"/>
<input type="range" id="size" min="128" max="150">
<br/>
<div>
    <h3>Photo de sortie : </h3>
    <img id="outputImage" />
</div>
<div>
    <h3>Photo d'entrée : </h3>   

    <div ng-controller="UploadController">
        <form>
            <input type="file" ng-file-select="onFileSelect($files)" >

<!--  <input type="file" ng-file-select="onFileSelect($files)" multiple> -->

        </form>
        <b>Aperçu:</b><br />
        <i ng-hide="imageSrc">Pas de photo sélectionnée.</i>
        <br>
        <img id="InputImage" width="800" height="600"  ng-src="<% imageSrc %>" /><br/>
        <b>Progrès:</b>
        <progress value="<% progress %>"></progress>    
    </div>
</div>
