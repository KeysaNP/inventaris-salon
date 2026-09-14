<div class="pos-container">
  <!-- Bar Atas: Pencarian & Tombol Pelanggan -->
  <div class="top-bar">
    <div class="search-box">
      <ion-icon name="search-outline"></ion-icon>
      <input type="text" placeholder="Cari Pelanggan..." />
    </div>
    <button type="button" class="btn-add-customer">
      <ion-icon name="add-outline"></ion-icon>
      Pelanggan Baru
    </button>
  </div>

  <!-- Filter Kategori Layanan -->
  <div class="category-tabs">
    <button class="tab-btn active">Semua</button>
    <button class="tab-btn">Rambut</button>
    <button class="tab-btn">Wajah</button>
    <button class="tab-btn">Make-up</button>
    <button class="tab-btn">Kuku</button>
    <button class="tab-btn">Tubuh</button>
    <button class="tab-btn">Waxing</button>
  </div>

  <!-- Grid Utama 3 Kolom -->
  <div class="pos-layout">
    <!-- KOLOM 1: PILIH LAYANAN -->
    <div class="panel service-panel">
      <h4>PILIH LAYANAN</h4>
      <div class="service-grid">
        <div class="service-card">
          <div class="icon-bg"><ion-icon name="scissors-outline"></ion-icon></div>
          <div class="service-title">Potong Rambut</div>
          <div class="service-sub">Gunting, Rp 80rb</div>
        </div>

        <div class="service-card">
          <div class="icon-bg"><ion-icon name="woman-outline"></ion-icon></div>
          <div class="service-title">Smoothing Rambut</div>
          <div class="service-sub">Obat & Catok, Rp 350rb</div>
        </div>

        <div class="service-card">
          <div class="icon-bg"><ion-icon name="sparkles-outline"></ion-icon></div>
          <div class="service-title">Warna Rambut</div>
          <div class="service-sub">Cat & Kuas, Rp 250rb</div>
        </div>

        <div class="service-card">
          <div class="icon-bg"><ion-icon name="happy-outline"></ion-icon></div>
          <div class="service-title">Facial</div>
          <div class="service-sub">Skincare, Rp 150rb</div>
        </div>

        <div class="service-card">
          <div class="icon-bg"><ion-icon name="brush-outline"></ion-icon></div>
          <div class="service-title">Make-up</div>
          <div class="service-sub">Make Over, Rp 200rb</div>
        </div>

        <div class="service-card">
          <div class="icon-bg"><ion-icon name="hand-left-outline"></ion-icon></div>
          <div class="service-title">Manicure & Pedicure</div>
          <div class="service-sub">Kutek Gel, Rp 120rb</div>
        </div>

        <div class="service-card">
          <div class="icon-bg"><ion-icon name="flower-outline"></ion-icon></div>
          <div class="service-title">Lulur Tubuh</div>
          <div class="service-sub">Bali Alus, Rp 150rb</div>
        </div>

        <div class="service-card">
          <div class="icon-bg"><ion-icon name="leaf-outline"></ion-icon></div>
          <div class="service-title">Waxing</div>
          <div class="service-sub">Mirael, Rp 100rb</div>
        </div>
      </div>
    </div>

    <!-- KOLOM 2: FORM DETAIL TRANSAKSI & RINCIAN -->
    <div class="middle-column">
      <div class="panel form-panel">
        <div class="form-grid">
          <!-- Form Input Kiri -->
          <div class="form-left">
            <h4 class="section-title">DETAIL TRANSAKSI</h4>
            
            <div class="form-group">
              <label>Kode Barang</label>
              <div class="input-with-btn">
                <input type="text" value="B001" readonly />
                <button type="button" class="btn-icon-add">+</button>
              </div>
            </div>

            <div class="form-group">
              <label>Nama Barang</label>
              <div class="input-price-row">
                <input type="text" value="Krim Rebonding Makarizo" />
                <span class="price-tag">Rp 500.000</span>
              </div>
            </div>

            <div class="form-group">
              <label>Kategori</label>
              <select>
                <option>Obat Kimia Rambut</option>
              </select>
            </div>

            <div class="form-group">
              <label>Harga Beli</label>
              <input type="text" value="Rp 400.000" />
            </div>

            <div class="form-row-2">
              <div class="form-group">
                <label>Isi / Berat</label>
                <input type="text" value="1.000" />
              </div>
              <div class="form-group">
                <label>Satuan Pembelian</label>
                <select><option>kg</option></select>
              </div>
            </div>

            <div class="form-row-2">
              <div class="form-group">
                <label>Stok Minimum</label>
                <input type="text" value="200" />
              </div>
              <div class="form-group">
                <label>&nbsp;</label>
                <select><option>gram</option></select>
              </div>
            </div>
          </div>

          <!-- Card Konversi Otomatis Kanan -->
          <div class="conversion-card">
            <h5>Konversi Otomatis</h5>
            <div class="conv-formula">1 kg = 1.000 gram</div>
            
            <div class="conv-item">
              <span>Total Isi</span>
              <strong>1.000 gram</strong>
            </div>
            <div class="conv-item">
              <span>Harga Beli</span>
              <strong>Rp400.000</strong>
            </div>
            <div class="conv-item">
              <span>Harga Modal</span>
              <strong>Rp400 / gram</strong>
            </div>
          </div>
        </div>

        <div class="form-actions">
          <button type="button" class="btn-cancel">Batal</button>
          <button type="button" class="btn-save">Simpan Barang</button>
        </div>
      </div>

      <!-- Rincian Perhitungan -->
      <div class="panel calculation-panel">
        <h5 class="calc-title">Rincian Perhitungan</h5>
        <div class="calc-row"><span>Harga Layanan</span><strong>Rp 500.000</strong></div>
        <div class="calc-row"><span>Modal Barang</span><strong>Rp 65.000</strong></div>
        <div class="calc-row"><span>Pendapatan Bersih</span><strong>Rp 435.000</strong></div>
        <div class="calc-row"><span>Komisi Karyawan (40%)</span><strong>Rp 174.000</strong></div>
        <div class="calc-row highlight"><span>Keuntungan Salon</span><strong>Rp 261.000</strong></div>

        <button type="button" class="btn-pay">BAYAR Rp 500.000</button>
      </div>
    </div>

    <!-- KOLOM 3: STATUS TRANSAKSI BERHASIL -->
    <div class="panel success-panel">
      <div class="success-icon">
        <ion-icon name="checkmark-outline"></ion-icon>
      </div>
      <h4>Transaksi Berhasil</h4>
      
      <div class="summary-box">
        <div class="label">Total Pembayaran</div>
        <div class="total-amount">Rp 500.000</div>
      </div>

      <div class="info-group">
        <label>Karyawan</label>
        <div>Rina</div>
      </div>
      
      <div class="info-group">
        <label>Komisi Bersih</label>
        <div>Rp400.000</div>
      </div>

      <div class="info-group">
        <label>Komisi netto</label>
        <div class="net-badge">Rp 405.000</div>
      </div>

      <button type="button" class="btn-new-trans">Transaksi Baru</button>
      <button type="button" class="btn-print-receipt">Lihat Struk</button>
    </div>
  </div>
</div>