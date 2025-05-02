import subprocess
import os
import tkinter as tk
from tkinter import ttk, messagebox
import threading

# Ruta absoluta a webtorrent.cmd
WEBTORRENT_COMMAND = r"C:\Users\aguer\AppData\Roaming\npm\webtorrent.cmd"  # <-- Ajusta según tu caso

# Carpeta de descarga
download_dir = os.path.join(os.getcwd(), "descargas")
os.makedirs(download_dir, exist_ok=True)

# Función que se ejecuta en segundo plano
def descargar_magnet(magnet_link, status_label):
    command = [
        WEBTORRENT_COMMAND,
        magnet_link,
        "--out", download_dir
    ]

    try:
        status_label.config(text="🔄 Iniciando descarga...")

        # Ejecuta y muestra salida en tiempo real
        process = subprocess.Popen(
            command,
            stdout=subprocess.PIPE,
            stderr=subprocess.STDOUT,
            universal_newlines=True,
            bufsize=1
        )

        for line in process.stdout:
            print(line.strip())  # Muestra en consola
            if "progress" in line.lower() or "%" in line:
                status_label.config(text=line.strip())  # Muestra algo de progreso
            elif "downloaded" in line.lower():
                status_label.config(text=line.strip())

        process.wait()

        if process.returncode == 0:
            status_label.config(text="✅ Descarga completada.")
        else:
            status_label.config(text="❌ Hubo un error en la descarga.")
    except FileNotFoundError:
        status_label.config(text="❌ No se encontró WebTorrent.")
        messagebox.showerror("Error", "No se encontró WebTorrent.\nVerifica la ruta.")
    except Exception as e:
        status_label.config(text="❌ Error inesperado.")
        messagebox.showerror("Error", str(e))

# GUI
def crear_ventana():
    ventana = tk.Tk()
    ventana.title("Descargador .torrent (magnet)")
    ventana.geometry("480x200")
    ventana.resizable(False, False)

    tk.Label(ventana, text="🔗 Enlace Magnet:", font=("Arial", 12)).pack(pady=10)

    entrada = tk.Entry(ventana, width=60, font=("Arial", 10))
    entrada.pack(pady=5)

    estado = tk.Label(ventana, text="", font=("Arial", 10))
    estado.pack(pady=10)

    def iniciar_descarga():
        magnet_link = entrada.get().strip()
        if not magnet_link.startswith("magnet:?"):
            messagebox.showwarning("Inválido", "Por favor ingresa un enlace magnet válido.")
            return

        threading.Thread(target=descargar_magnet, args=(magnet_link, estado), daemon=True).start()

    ttk.Button(ventana, text="📥 Descargar", command=iniciar_descarga).pack(pady=5)

    ventana.mainloop()

crear_ventana()
