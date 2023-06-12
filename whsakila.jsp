<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver"
jdbcUrl="jdbc:mysql://localhost/aw_rev?user=root&password=" catalogUri="/WEB-INF/queries/dwadventure.xml">

select {[Measures].[TotalSales],[Measures].[Ongkir]} ON COLUMNS,
  {([produk],[waktu].[All Times],[Pelanggan])} ON ROWS
from [Jual]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query Adventure Works using Mondrian OLAP</c:set>
