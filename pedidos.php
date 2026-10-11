// Validar disponibilidad de stock antes de procesar el pedido
if ($stockDisponible < $cantidadSolicitada) {
die("Error: Stock insuficiente para completar la transacción.");
}
