<template>
  <body>
    <h1 class="beautiful-title">Compare Page</h1>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-9">
          <table class="table table-dark">
            <table class="table table-dark">
              <tr>
                <th>Select Product</th>
                <th width="300px">
                  <select class="form-control" id="select1">
                    <option value="0">-- Select Anyone --</option>
                  </select>
                </th>
                <th width="300px">
                  <select class="form-control" id="select2">
                    <option value="0">-- Select Anyone --</option>
                  </select>
                </th>
              </tr>
              <tr>
                <th class="text-center">Product Image</th>
                <td>
                  <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                    id="img1" alt=" " />
                </td>
                <td>
                  <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                    id="img2" alt=" " />
                </td>
              </tr>
              <tr>
                <th>Product Price</th>
                <td id="price1">N/A</td>
                <td id="price2">N/A</td>
              </tr>
              <tr>
                <th class="text-center">Product Description</th>
                <td id="desc1">N/A</td>
                <td id="desc2">N/A</td>
              </tr>
              <tr>
                <th>Product Brand</th>
                <td id="brand1">N/A</td>
                <td id="brand2">N/A</td>
              </tr>
              <tr>
                <th>Ram</th>
                <td id="brand1">N/A</td>
                <td id="brand2">N/A</td>
              </tr>
              <tr>
                <th>Core</th>
                <td id="Ram1">N/A</td>
                <td id="Ram2">N/A</td>
              </tr>
              <tr>
                <th>Storge</th>
                <td id="Storge1">N/A</td>
                <td id="Storge2">N/A</td>
              </tr>
              <tr>
                <th>Size_Screnn</th>
                <td id="Size_Screnn1">N/A</td>
                <td id="Size_Screnn2">N/A</td>
              </tr>
            </table>
          </table>
        </div>
      </div>
    </div>
  </body>
</template>
<script>
export default {
  name: "ComPare"
};
</script>
<style scoped>
body {
  background-color: #2c2f32;
  color: #ecf0f1;
  margin: 0;
  padding: 0;
}

.container {
  margin-top: 5vh;
}

.beautiful-title {
  font-size: 2.5rem;
  text-align: center;
  margin-bottom: 3vh;
  color: #d3dae1;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease-in-out;
  padding-top: 2vh;
}

.table {
  background-color: #34495e;
  color: #ecf0f1;
  text-align: center;
  border-radius: 1vw;
  overflow: hidden;
}

.table th,
.table td {
  padding: 2vw;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #2c3e50;
}

img {
  width: 100%;
  max-height: 25vh;
  object-fit: contain;
  border-radius: 1vw;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
}

img:hover {
  transform: scale(1.1);
}

@media (max-width: 767px) {
  .beautiful-title {
    font-size: 2rem;
  }

  .table th,
  .table td {
    padding: 1vw;
  }

  img {
    max-height: 15vh;
  }
}
</style>
