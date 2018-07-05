$(function() {
  $.ajax({
    type: "GET",
    url: "getAllDaftar/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "500px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 5,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAllDaftar/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addDaftar/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "PUT",
            url: "/clients/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteDaftar/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "nama",
          title: "Nama",
          type: "text",
          width: 150
        },
        {
          name: "nim",
          title: "NIM",
          type: "text",
          width: 80
        },
        {
          name: "tempatLahir",
          title: "Tempat Lahir",
          type: "text",
          width: 70
        },
        {
          name: "tanggalLahir",
          title: "Tanggal Lahir",
          type: "text",
          width: 90
        },
        {
          name: "jenisKelamin",
          title: "Jenis Kelamin",
          type: "text",
          width: 80
        },
        {
          name: "divisi",
          title: "divisi",
          type: "text",
          width: 50
        },
        {
          name: "jurusan",
          title: "Jurusan",
          type: "text",
          width: 90
        },
        {
          name: "alamat",
          title: "alamat",
          type: "text",
          width: 200
        },
        {
          name: "prestasi",
          title: "Prestasi",
          type: "text",
          width: 50
        },
        {
          name: "noHp",
          title: "No Hp",
          type: "text",
          width: 90
        },
        {
          name: "foto",
          title: "Foto",
          type: "text",
          width: 150
        },
        { type: "control" }
      ]
    });
  });
});
