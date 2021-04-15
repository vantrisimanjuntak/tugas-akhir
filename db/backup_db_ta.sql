--
-- PostgreSQL database dump
--

-- Dumped from database version 13.0
-- Dumped by pg_dump version 13.0

-- Started on 2020-12-16 10:22:22

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE db_ta_ujicoba;
--
-- TOC entry 3048 (class 1262 OID 17317)
-- Name: db_ta_ujicoba; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE db_ta_ujicoba WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Indonesian_Indonesia.1252';


ALTER DATABASE db_ta_ujicoba OWNER TO postgres;

\connect db_ta_ujicoba

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 203 (class 1259 OID 17343)
-- Name: dosen; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.dosen (
    nip character varying(255) NOT NULL,
    nama character varying(255) NOT NULL,
    pendidikan_terakhir character varying(5) NOT NULL,
    foto character varying(255) NOT NULL,
    program_studi character varying(5) NOT NULL
);


ALTER TABLE public.dosen OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 17391)
-- Name: index; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.index (
    id integer NOT NULL,
    term character varying(100) NOT NULL,
    no_doc character varying(10) NOT NULL,
    total_dokumen integer NOT NULL,
    idf numeric(10,6) NOT NULL
);


ALTER TABLE public.index OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 17363)
-- Name: kata_imbuhan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.kata_imbuhan (
    id character varying(5) NOT NULL,
    kata_imbuhan character varying(50) NOT NULL,
    kata_dasar character varying(50) NOT NULL
);


ALTER TABLE public.kata_imbuhan OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 17333)
-- Name: login_time; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.login_time (
    id character varying(10) NOT NULL,
    login_id character varying(1) NOT NULL,
    time_login timestamp without time zone NOT NULL,
    ip_address character varying(255) NOT NULL
);


ALTER TABLE public.login_time OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 17338)
-- Name: mahasiswa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.mahasiswa (
    nim integer NOT NULL,
    nama character varying(255) NOT NULL,
    program_studi character varying(4) NOT NULL
);


ALTER TABLE public.mahasiswa OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 17401)
-- Name: program_studi; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.program_studi (
    kd_program_studi character varying(5) NOT NULL,
    program_studi character varying(255) NOT NULL
);


ALTER TABLE public.program_studi OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 17351)
-- Name: stopword; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.stopword (
    id character varying(10) NOT NULL,
    stopword character varying(100) NOT NULL
);


ALTER TABLE public.stopword OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 17318)
-- Name: superuser; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.superuser (
    id character varying(5) NOT NULL,
    username character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    alias character varying(50) NOT NULL
);


ALTER TABLE public.superuser OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 17368)
-- Name: tugas_akhir; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tugas_akhir (
    no_reg character varying(8) NOT NULL,
    mahasiswa integer NOT NULL,
    judul_skripsi character varying(255) NOT NULL,
    abstrak text NOT NULL,
    dp_satu character varying(30) NOT NULL,
    dp_dua character varying(30) NOT NULL,
    ta_program_studi character varying(5) NOT NULL
);


ALTER TABLE public.tugas_akhir OWNER TO postgres;

--
-- TOC entry 3037 (class 0 OID 17343)
-- Dependencies: 203
-- Data for Name: dosen; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011611144', ' Asih Pujiastuti, S.Kom., M.Cs', 'S2', '248ec2a3422d37.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010904068', 'Sudaryanto, S.T., M.Eng', 'S2', 'ccefcaa8401ac9.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011210095', 'Anggraini Kusumaningrum, S.Kom., M.Cs', 'S2', 'd2a4d0ef049b98.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011409116', 'Harliyus Agustian, S.Kom., M.Cs', 'S2', '5a935c544631b4.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010303032', 'Hero Wintolo, S.T., M.Kom', 'S2', '2f6b2b5900ee9c.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('0196305061990032001', 'Dra. Mardiana Irawaty, M.Sc.St', 'S2', '484aa0f6f46792.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010209011', 'Anton Setiawan Honggowibowo, S.Kom., M.T.', 'S2', '886c1538637b3b.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010409041', 'Haruno Sajati, S.T., M.Eng', 'S2', '9785e367e2698c.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010706059', 'Nurcahyani Dewi Retnowati, S.Far, Apt., M.T', 'S2', '8175ccceb5b463.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011611143', ' Astika Ayuningtyas, S.Kom., M.Cs', 'S2', 'ed1638a798cc5d.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011410126', 'Dewanti Ratna Pertiwi, S.Pd., M.Hum', 'S2', '944aeda59c21f1.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011001072', 'Bangga Dirgantara Adiputra, S.T., M.T', 'S2', '7d97020a47b393.jpg', 'TD');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010301028', 'Yuliani Indrianingsih, S.T., M.Kom', 'S2', '927fe5030159be.jpeg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010901061', 'Sri Mulyani, S.T., M.Eng', 'S2', 'a5d29f47bf3030.jpg', 'TD');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010301030', 'Dwi Nugraheny, S.Kom., M.Cs', 'S2', '840ba01450ed22.jpg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('01181187', ' Salam Aryanto S.Kom., M.Kom', 'S2', '57dfd65a17e00a.jpg', 'TF');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011811186', 'Lazuardy Rahendra Pinandhita, S.T., M.T', 'S2', '5e0f5ab732b683.jpg', 'TD');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011801166', 'Indro Lukito, S.T, M.Eng', 'S2', 'dc395b70935a8c.png', 'TD');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010209013', 'Eko Poerwanto, S.T., M.Sc', 'S2', 'da2fff6a4bccc8.jpg', 'TI');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('0197310182005011001', 'R. Nur Akhmad Triwibowo, S.T., M.Eng', 'S2', 'b5aa09f3feaa5c.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('04', 'Bahrul Jalaali, S.T., M.Eng', 'S2', 'd4ec6699e7e11d.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010202008', ' Dr. Okto Dinaryanto, S.T., M.M', 'S3', 'ead110c18f08c3.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('05', 'Agung Prakoso,S.T., M.Eng', 'S2', '20f8c8d1c12e48.png', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011105086', 'Ir. Sudarmanto, M.T', 'S2', '1f6eeaa81ca9b3.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('0521037604', ' Benedictus Mardwianta, S.T., M.T.', 'S2', '387ee6684fbfe2.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('06', 'Eli Kumolosari, S.T., M.Eng', 'S2', '971080a1816af9.png', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('0197606122005011001', 'Fajar Nugroho, S.T., M.Eng', 'S2', '4c9dbfc7d9eba6.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('07', ' Agung Prakoso, S.T., M.Eng', 'S2', '54cd6048325ecc.png', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011205090', 'Buyung Junaidin, S.T., M.T', 'S2', '61841ff5fcd20b.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010202007', 'Dedet Hermawan Setiabudi, S.T., M.T', 'S2', 'e344f150fdb167.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011608141', 'Cyrilus Sukaca Budiono, S.T., M.T', 'S2', '83e947d3d177ed.jpg', 'D3');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011012082', 'Dr. Teguh Wibowo, S.T., M.T', 'S3', 'bc875ec5e9325f.jpg', 'TD');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010209012', 'Nurfi Ahmadi, S.T., M.Eng', 'S2', 'ae0147e5f46bad.jpg', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('08', 'Henny Pratiwi, S.T., M.Eng', 'S2', 'f2851c177668a1.png', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('09', 'Ellyawan Setyo Arbintarso, S.T., M.Sc., Ph.D', 'S3', 'efe0a7111613d0.png', 'TM');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011210097', 'M. JALU PURNOMO,S.T., M.Eng', 'S2', 'ed854b160a8f60.jpg', 'D3');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('0197111112005011001', 'Denny Dermawan, S.T., M.Eng', 'S2', '97504c7921c2f3.jpg', 'TE');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011406112', 'Paulus Setiawan S.T., M.T', 'S2', '633a55f3b2fac5.jpg', 'TE');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010301031', 'Freddy Kurniawan, S.T., M.T', 'S2', '5dc3b71eb42626.jpg', 'TE');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('0196207061989031004', 'Ir. Bambang Sudibya, M.T', 'S2', '6cb3f8e43e4bac.jpg', 'TE');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011512135', 'Catur Budi Waluyo, S.T., M.T', 'S2', '985f9713b875bc.jpg', 'TE');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011006081', ' Ir. Sutjianto S., M.T', 'S2', 'd355b375fe59c6.jpg', 'TE');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010509045', 'Lasmadi, S.T., M.Eng', 'S2', 'ee708c09ff40eb.jpg', 'TE');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('011204089', 'Yenni Astuti, S.T., M.Eng', 'S2', '82b3a82f84a39f.jpg', 'TE');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('10', 'Dr. Ir. Sugiarto, M.T', 'S3', 'ee17af619ba7e6.png', 'TE');
INSERT INTO public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) VALUES ('010605049', 'Moh. Ardi Cahyono, S.T., M.T', 'S2', '9d953dee10504c.jpg', 'TD');


--
-- TOC entry 3041 (class 0 OID 17391)
-- Dependencies: 207
-- Data for Name: index; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3039 (class 0 OID 17363)
-- Dependencies: 205
-- Data for Name: kata_imbuhan; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('a3e2', 'dikarenakan', 'karena');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('149c', 'mencari', 'cari');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('c6f9', 'kerusakan', 'rusak');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('0258', 'mendukung', 'dukung');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('40cf', 'membahas', 'bahas');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('b76a', 'menghasilkan', 'hasil');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('c90b', 'mengakibatkan', 'akibat');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('13c8', 'memberikan', 'beri');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('1304', 'mengetahui', 'tahu');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('31a0', 'mengidentifikasi', 'identifikasi');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('3215', 'dibutuhkan', 'butuh');
INSERT INTO public.kata_imbuhan (id, kata_imbuhan, kata_dasar) VALUES ('ffe6', 'mempermudah', 'mudah');


--
-- TOC entry 3035 (class 0 OID 17333)
-- Dependencies: 201
-- Data for Name: login_time; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.login_time (id, login_id, time_login, ip_address) VALUES ('4e3abcb0', '1', '2020-12-15 22:12:23', '127.0.0.1');
INSERT INTO public.login_time (id, login_id, time_login, ip_address) VALUES ('2de3aca5', '1', '2020-12-16 08:52:13', '127.0.0.1');


--
-- TOC entry 3036 (class 0 OID 17338)
-- Dependencies: 202
-- Data for Name: mahasiswa; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040079, 'MUHAMAD HISYAM', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030006, 'DENO DASEFTRA CESSARA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030007, 'RETNO DEWI IRIANTI ', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030011, 'FAJAR TAQY WICAHYA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030013, 'SULISTYO NUGROHO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030016, 'DWI NURHAYATI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030017, 'ISTIQOMAH NURAINI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030019, 'MUHAMMAD ZAENUDIN SANI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030020, 'NOVANDA SANDIANTARA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030024, 'GEBY NAULY PAKPAHAN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030025, 'MUHAMMAD VARIAN SAYOGA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030027, 'ELLYANA MEGA DEWANTRI ASTUTI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030028, 'ERNI JUMIYANTI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030031, 'DESYNTA KARMILA SARI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030032, 'YASIFA YURI HAQLI SUKMA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030033, 'SATYA WIRA WICAKSANA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030036, 'ADETYA DYAS SAPUTRA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030038, 'DAEWU GUS BINTARA PUTRA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030039, 'QATRUNNADA HUMAIRA L', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030041, 'DIAN FITASARI DURU', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030043, 'AGUNG NUGRAHA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030049, 'MUHAMMAD ALI SOFYAN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030052, 'BIMA PRIYOGA WASKITA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030056, 'DWINNY PUSPA DINAR SAPUTRI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030061, 'MUHAMMAD IRFAN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030065, 'BENNY ARIAN SAPUTRA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030066, 'NUR HANIFAH', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030048, 'AGUNG PRASETIA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030045, 'CHINDY PUSPITA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030053, 'ARIEF DWI NUGROHO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15030001, 'NANDRA PUTRA ARYANTO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030050, 'PASCALINA KAROLINA SRAUN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030074, 'CALVIN EMILIANUS SIRIMASE', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030080, 'ALDIO BIMA SAIFULLAH', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030019, 'RISKI MULIA PRAKASA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030040, 'HAERUL ANAM', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030042, 'OPSIDION TEGAR PRATAMA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030023, 'ALEXANDRO APRILIANTO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030076, 'ROSMINA KALEDUPA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030084, 'NISYA AMELIA ', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030061, 'MUHAMAD ASROFI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030049, 'LILIK GIRI REZANDO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030066, 'MUHAMMAD ZAINAL ABIDIN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030001, 'RIDWAN SUBAGYO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030020, 'MOH ERTON PATI GUSTIAN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030062, 'BAYU SUGARA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030006, 'ERA ELFRIANA SITANGGANG', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030043, 'ZARTUJI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030015, 'BESTAFIKO YOSI BORIZQY', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030051, 'DONNY ANARIANTO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030045, 'FELLA NUGRAHENI SORAYA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030027, 'MUHAMMAD RIFAI NUR SYAHFENDI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030052, 'PANJI PAMUNGKAS', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030053, 'RIDHO ADI KURNIAWAN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030048, 'MUTIARA SEPTIVIANI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030055, 'DELTHA ADHITAMA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030069, 'SAPRUDIN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030005, 'ARIFIN ANNAS RACHMADI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030034, 'ARRY DWI SETIAWAN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030004, 'ALDA ZHAKINAH YUSUF', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030054, 'EKO MURDIANSYAH', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030009, 'CHRISTOPORUS GALIH PRAMUDITO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030033, 'RESTI ARDIYANTI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030057, 'REGINA MAULA ADIBA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030086, 'RIYAN ANDRIYANTO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030022, 'REZA ADITYA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030029, 'SEPTIANA NINDA ANISA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030017, 'SHANTI DWI PRASETYAWATI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030039, 'FACHRUL ARDIANSYAH', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030058, 'BAYU AJI SANTOSO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030068, 'AWANDHA PRABOWO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030064, 'FATIMATUZZAHROH', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030070, 'AFRIZAL TRIANTORO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030065, 'MUHAMMAD IMAM', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14030060, 'BAYU DWI ATMOJO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16030050, 'EVIANA YULIANTI SAPUTRI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16030047, 'NELLA HASNA NIHAYAH', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16030007, 'PUJA KURNIA PUTRI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16030089, 'MUCHAMMAD NUR ILHAM MAJID', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16030088, 'RILLA WAHYUNINGSIH', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16030017, 'EGA ARI WIYASA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16030071, 'YESI WULANDARI ', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16030001, 'MUHAMMAD YUSUF IDHZA AKBAR', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030052, 'AGUNG SAPUTRA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030054, 'NURUL EKAWATI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030029, 'DIMAS MERIANTO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030059, 'JOKO AGUNG GOEMERLY', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030061, 'KOKO WIYONO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030067, 'JODIO BLASIUS LOPES', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030070, 'GILAR PRAKOSO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030009, 'RAGIL ANDARUWATI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030047, 'UJANG RANGGA JATMIKA ', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030015, 'MUHAMMAD IMAM RAHARJO', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030036, 'LUKMAN MANDALA PUTRA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030031, 'ISNI PUTRI ASTUTI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030042, 'RANDY PRATAMA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030041, 'HARYANTO EBEN', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030050, 'MELANIE RISKIANA SARI', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030030, 'AJENG RYANDA PRATIKA SUHANDA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030017, 'RIO RACHMADI NURSA', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13030012, 'EKI FAJRI PRATAMA ', 'TF');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040011, 'IDRIS INDRAWAN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040022, 'GUSTY LEONARDY ALUNAT', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040093, 'DIMAS FUERO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040016, 'EDWARD VICTORIAN MARPAUNG', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040099, 'MUHAMMAD RAFLIZA HARJUNA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040004, 'OCTOVIAN HENDRA JEFRY WELERUBUN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040077, 'ADE FIKRI HADILLAH', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040076, 'AHMAD THOYIB MAHBUB', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040041, 'MUHAMMAD FACHRUR HERNOMO AJI', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040044, 'MUH. FAISAL', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040062, 'FRANKLIN SAMUEL EDEL KOIBUR', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040053, 'VIKI GILANG RAMADHAN SYAHRUL ALAM', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040069, 'WAYAN WIARDEFAN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040045, 'AREL PRASETYA WIBOWO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040025, 'GINANJAR SASMITA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040061, 'LUKMANUL HAKIM', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040022, 'IBNU', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040041, 'BAYJURI PRATAMA ANGGARA SAPUTRA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040087, 'MUHAMMAD RONY NASUTION', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040061, 'MUSAB AULIA AL AMIN ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040078, 'FADHIL MUKHAMMAD', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040053, 'ANWAR SIRAJUDIN LATHIF', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040079, 'ALFIAN PURNOMO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040080, 'MUHAMAD SIGIT PRASETYO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040015, 'DIMAS BAGUS NOVIANTORO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040010, 'RASUM', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040016, 'YANUAR ROSA PRIAMBADA ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040051, 'MUHAMMAD AMIN HAFIS', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040073, 'ARI MUSTOFA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040061, 'SYAIFUL ASPARINGGA ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040072, 'MUTIA FETSAMARITA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040057, 'ULYA MUHARANI', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040024, 'SEVI SETIANINGSIH', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040022, 'ARI PRASETYO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040001, 'MUHAMMAD IMRON AGUS SUCIPTO ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040004, 'ZIKERI RAHMAD FIRDAUS', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040031, 'MUHAMMAD NOVAN SIREGAR', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040050, 'MUNAWAR HUSAINI ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040025, 'KHATMIL IMAN MAHARDHIKA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040018, 'UJANG UUS SUNANDAR', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040038, 'ZIKRA HAMDANI', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040045, 'ARIEF RAKHMAN KHAKIM', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040038, 'ARYA BUE PRATAMA SIBUEA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040021, 'RIVALDI DWI CAHYADI', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040066, 'AHMAD ILYAS HAYKAL PUTRA ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040085, 'FERDIAN WAHYU NUGRAHA ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040072, 'ARIF NOVA RAHMAD', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16040063, 'ANUGRAH BUDI WICAKSONO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040059, 'EMANUEL ARICKY MAHARDIKA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040094, 'ACHMAD ANTARES SHELLDY WIRAWAN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040009, 'ZANDY WOLFRENDY DIMA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040086, 'AZAM FAYLASUF', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040056, 'DADANG AHMAD ADISON', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040043, 'ABD LAIL SYAFRUDIN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040049, 'ISOMMUDIN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040029, 'M HARIADI RAHMAN ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040099, 'DOMINGOS AFONCO DA COSTA LELAN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040068, 'LAYU TAMAELA ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040097, 'CANDRA RONI SAGITA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040055, 'ALAN JULIANDA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040046, 'ALIF AKBAR IKHSAN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040070, 'AZIZ MURY SUSANTO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040013, 'RAHMAT AGUNG WIRAWAN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040003, 'ANDI NUGRAHA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040093, 'ARI SUSILO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040033, 'AZIZ MOULANA YUNUS', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (12040046, 'HUDA NUR HAKIKI', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040022, 'RIFAI SANDRA AFILA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040069, 'ANDREAS MAU BERE', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040086, 'PRABOWO DEWANTORO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (9040019, 'JOKO ADI PRAMONO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040021, 'ARI CHRISTIANTO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040020, 'WAHYU CANDRA PRAKUSNO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040018, 'WAHYU ADI GUNTORO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040043, 'UCOK ERICHON PANE', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040092, 'HENRY SEBASTIAN SARAGIH', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (12040069, 'NOFRI YANDI', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (12040049, 'YANIKO ANDRIATAMA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040013, 'AJI SUNARNO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040032, 'DWI ANTON', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040014, 'MUAFI ALIF LUKMAN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (12040047, 'DIDIK MARYANTO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (12040036, 'ADIKA SATYA WIDITA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040052, 'ARIF HASBI SEPTIAN', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040083, 'UMIYATUL MUBAROKAH', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (10040034, 'DHANDANG SETO SANJAYA ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040083, 'BIMA SAKTI', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (10040007, 'JIMRIS KRISTOFORUS', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040036, 'EKA SUPRIATNA ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (12040009, 'ADRIANUS DARI MUDA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040026, 'TIARA PRIMATURIA PUTRI ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040031, 'ARIS RINALDI', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040059, 'WISMO JOKO PRIYANTO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (12040058, 'MELKIANUS GEWAB', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (10040049, 'MUHAMMAD NOVAL', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14040008, 'FERNANDO HARDA RENGGAR RADIANATA PURWANTO', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15040060, 'GEBI SUWIRJA', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (10040018, 'GREGORIUS HARDIAN TRILAKSONO N', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13040077, 'YONGKY RIYA MIRAD ', 'TM');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010070, 'ERVAN RIZALDI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010015, 'RIZAL SIDIQ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010002, 'DIAH AYU SEPTIANA ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010022, 'ARICITA MONTANA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010042, 'WILDA NOER AGUSTIANINGSIH', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010038, 'ABIYASA PRIHANTARA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010028, 'ANNUUM PANGGIH NURYANTO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010058, 'GRACE DAYANTY SIAHAAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010037, 'BIMO ANGGIT SAPUTRA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010006, 'KURNIANTO SAPUTRA ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010026, 'GAGAH KRISYULIARDI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010003, 'YUSTINO EFATA KWEK', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010049, 'CRISPIANO DO ROSARIO GOANG', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010005, 'RISKI NUR MUHAMMAD ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010035, 'RIDHO ARDYA PAMUNGKAS', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010040, 'ADITYA INDRA JAYA SANTOSA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010088, 'HARI DARMAWAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010044, 'BARBARA YUDHI ADVENTI ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010018, 'ANDI PERMANA PUTRA ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010023, 'ROISUL RABBANI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010069, 'ARIF ADI CAHYONO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010082, 'MUHAMMAD ARI ROMA WICAKSONO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010011, 'NURUL FAUZIAH ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010052, 'DENISALFAYEAR', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010064, 'INTAN DYAH PRADNJAPARAMITHA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010007, 'RIAN MULYADI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010059, 'MUHAMMAD IRFAN PAMUNGKAS', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010060, 'MAULANA SOHIBI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010097, 'FAROBI WIDIA NANDA ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010068, 'YUYUN RUSTIANIK', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (16010004, 'MARTIKANA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010021, 'RIZZAN HAZDIQQI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010044, 'HERDIYANTO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010074, 'YOSAFAT SADEWO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010019, 'RINA AGUSTIN N.P', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010062, 'MUHAMMAD HAGI SULISTYO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010024, 'MUHAMMAD IZZUDDIN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010061, 'KRISOLITOS WIRANTA TAMPUBOLON', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010018, 'SIDIQ ARIEF RIVAI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010043, 'AJI INDRA RUCHMANA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010072, 'ABDUL GHANI ANJARSUQO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010028, 'IQNASIUS MANDAGI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010071, 'DICKY AKBAR HEGA PUTRA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010077, 'ADI SETIAWAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010026, 'TUTI RAHAYU', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010027, 'ILHAM ZUHUD RAMADHAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010022, 'IKA DESYA WAHYUDIANTHY ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010046, 'GUNUNG ALBERSIUS TAMPUBOLON', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010034, 'LISBETH CITRA BERUTU', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010010, 'WAGE ADY KUSUMA ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (11010013, 'ADERITO JOSE CORREIA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010059, 'AMMAR SHODIQ PRATAMA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010022, 'MOH RASYID RIDHA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010058, 'AWALUDDIN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010012, 'RIO ANDREAS SANUSI ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010066, 'ADHIKA WISNU RAHARDYAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010023, 'RIO ADI SAPUTRA ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (10010015, 'IKLAS OLUA ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010009, 'TITIS TRI SUSANTI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010007, 'NOOR FITA INDRI PRAYOGA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010001, 'AZ UCHROWI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010011, 'SIDIQ WIJANARKO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010018, 'ARIF DWI HIDAYAT', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010036, 'ERNANDO RIZKI DALIMUNTHE', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (15010003, 'LEO ANGGARA KRISNA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (10110051, 'Gelasio Cornelio Da Costa Luz Ferreira', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010042, 'AHMAD NAFI HASAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010026, 'SATRIA NURFALATEHAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (11010010, 'RIZKA NAFIA ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010027, 'AGUNG SUSETYO ADI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010045, 'REYNALDO PARULIAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13210021, 'AMOS M. VILA NOVA DA S. SOARES', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (10110046, 'IGNASIUS LABI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (12010022, 'ANDHIKA NUGRAHA WICAKSANA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010020, 'ALIF PUTRA PRADIANTO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010050, 'WAHYU WIDABUDIATMA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010039, 'GHIFARI FIBRIANTO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010029, 'WIYAKTA FAJAR KUNCORO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010032, 'ARIF YUDI TRIPRASETYO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010046, 'WAHYU SYAFANGATULLOH', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010037, 'MASUD RIFAI ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010051, 'FAJAR HUTOMO ARDIANSYAH', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010041, 'DEPI YULIYATNO', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010054, 'LUQMANUL HAKIM', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010058, 'MOCH. IKBAL', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010051, 'RIZQILILLAH SEPUTRA', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010055, 'SIDIQ ANDRIANSYAH', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010011, 'MUCH ARIF SUBHAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010004, 'FACHRY NURRIZA WAKID', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010037, 'LORENTINUS DEFAANTORI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010006, 'RAFDHATUL HIDAYAT', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010015, 'MUHAMMAD ZIKRI IQBAL', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (12010023, 'VALERIA VALENTINA KUAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010039, 'MUHAMMAD LUTFI', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010063, 'EDO FIRMANSYAH', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010047, 'MUHAMMAD ILHAM HIDAYATULLAH ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010048, 'MUHAMMAD ZAIDAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010017, 'OSWALD RICHFILD TAMBUNAN', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (14010045, 'HARDIANTO ', 'TE');
INSERT INTO public.mahasiswa (nim, nama, program_studi) VALUES (13010010, 'ZULKIFLI RUMADAY', 'TE');


--
-- TOC entry 3042 (class 0 OID 17401)
-- Dependencies: 208
-- Data for Name: program_studi; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.program_studi (kd_program_studi, program_studi) VALUES ('TD', 'Teknik Dirgantara');
INSERT INTO public.program_studi (kd_program_studi, program_studi) VALUES ('TE', 'Teknik Elektro');
INSERT INTO public.program_studi (kd_program_studi, program_studi) VALUES ('TF', 'Informatika');
INSERT INTO public.program_studi (kd_program_studi, program_studi) VALUES ('TI', 'Teknik Industri');
INSERT INTO public.program_studi (kd_program_studi, program_studi) VALUES ('TM', 'Teknik Mesin');
INSERT INTO public.program_studi (kd_program_studi, program_studi) VALUES ('D3', 'D3-Aeronautika');


--
-- TOC entry 3038 (class 0 OID 17351)
-- Dependencies: 204
-- Data for Name: stopword; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.stopword (id, stopword) VALUES ('a635eb', 'adanya');
INSERT INTO public.stopword (id, stopword) VALUES ('364e3b', 'ini');
INSERT INTO public.stopword (id, stopword) VALUES ('8ccab3', 'dan');
INSERT INTO public.stopword (id, stopword) VALUES ('bce000', 'yang');
INSERT INTO public.stopword (id, stopword) VALUES ('1c7d46', 'sebagai');
INSERT INTO public.stopword (id, stopword) VALUES ('2d14a7', 'sebuah');
INSERT INTO public.stopword (id, stopword) VALUES ('b52fd2', 'yaitu');
INSERT INTO public.stopword (id, stopword) VALUES ('b20125', 'untuk');
INSERT INTO public.stopword (id, stopword) VALUES ('c8a9ec', 'selain');
INSERT INTO public.stopword (id, stopword) VALUES ('3c457f', 'adalah');
INSERT INTO public.stopword (id, stopword) VALUES ('7db39b', 'itu');
INSERT INTO public.stopword (id, stopword) VALUES ('9db706', 'dengan');
INSERT INTO public.stopword (id, stopword) VALUES ('e2024a', 'oleh');


--
-- TOC entry 3034 (class 0 OID 17318)
-- Dependencies: 200
-- Data for Name: superuser; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.superuser (id, username, password, alias) VALUES ('1', 'd033e22ae348aeb5660fc2140aec35850c4da997', '77a54b8fa5007d82c16fea23eca4a9eb2d664355', 'Superuser');


--
-- TOC entry 3040 (class 0 OID 17368)
-- Dependencies: 206
-- Data for Name: tugas_akhir; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tugas_akhir (no_reg, mahasiswa, judul_skripsi, abstrak, dp_satu, dp_dua, ta_program_studi) VALUES ('6652e730', 15030006, 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PROGRAMMING INTERFACE (API) DARI CISCO', 'VLAN merupakan salah satu teknologi komputer yang saat ini sangat dibutuhkan. Hal ini dikarenakan VLAN dapat membagi satu jaringan pada perangkat switch menjadi bagian-bagian kecil jaringan lain. Cisco Catalyst 3750 merupakan perangkat switch yang sudah menyediakan teknologi VLAN. Permasalahan yang ditemukan pada Cisco Catalyst 3750 adalah sistem manajemen VLAN yang masih berbasis command line dan tidak dapat diakses dari jarak jauh. Untuk itu dibuat VLAN berbasis GUI dan dapat diakses dari jarak jauh. VLAN yang dibuat berbasis Web dengan tujuan untuk memberikan kebebasan pemakaian device dan tidak harus terfokus pada satu jenis device saja. VLAN berbasis Web ini dibuat dengan memanfaatkan API Cisco sebagai penghubung antara bahasa pemrograman pada VLAN berbasis Web dengan bahasa pada perangkat lunak Cisco Catalyst 3750. Pemanfaatan Telnet berperan penting dalam pembuatan VLAN berbasis Web ini, dimana Telnet memberikan akses lebih luas pada Cisco Catalyst 3750 untuk diakses di luar aplikasi terminal emulator. Dengan pemanfaatan Telnet administrator cukup mengujungi IP yang telah dibuat untuk mengakses Cisco Catalyst 3750. Akses jarak jauh pada VLAN berbasis Web ini menggunakan port fowarding. Serveo.net adalah salah satu penyedia layanan port fowarding. Dengan memanfaatkan Serveo.net, VLAN berbasis Web yang masih dalam server local dapat diakses dari jarak jauh meski tanpa IP publik. Hasil pengujian pada penelitian ini menunjukkan bahwa VLAN berbasis Web terbukti dapat melakukan konfigurasi VLAN sehingga dapat digunakan untuk mengatur hubungan antar komputer sesuai dengan kebutuhan pada jaringan yang digunakan. Kata kunci : VLAN , API Cisco, Telnet, port fowarding, Cisco Catalyst 3750.', '011611143', '010904068', 'TF');


--
-- TOC entry 2890 (class 2606 OID 17350)
-- Name: dosen dosen_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.dosen
    ADD CONSTRAINT dosen_pkey PRIMARY KEY (nip);


--
-- TOC entry 2898 (class 2606 OID 17395)
-- Name: index index_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.index
    ADD CONSTRAINT index_pkey PRIMARY KEY (id);


--
-- TOC entry 2894 (class 2606 OID 17367)
-- Name: kata_imbuhan kata_imbuhan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kata_imbuhan
    ADD CONSTRAINT kata_imbuhan_pkey PRIMARY KEY (id);


--
-- TOC entry 2886 (class 2606 OID 17337)
-- Name: login_time login_time_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.login_time
    ADD CONSTRAINT login_time_pkey PRIMARY KEY (id);


--
-- TOC entry 2888 (class 2606 OID 17342)
-- Name: mahasiswa mahasiswa_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mahasiswa
    ADD CONSTRAINT mahasiswa_pkey PRIMARY KEY (nim);


--
-- TOC entry 2900 (class 2606 OID 17405)
-- Name: program_studi program_studi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.program_studi
    ADD CONSTRAINT program_studi_pkey PRIMARY KEY (kd_program_studi);


--
-- TOC entry 2892 (class 2606 OID 17358)
-- Name: stopword stopwords_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.stopword
    ADD CONSTRAINT stopwords_pkey PRIMARY KEY (id);


--
-- TOC entry 2884 (class 2606 OID 17325)
-- Name: superuser superuser_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.superuser
    ADD CONSTRAINT superuser_pkey PRIMARY KEY (id);


--
-- TOC entry 2896 (class 2606 OID 17375)
-- Name: tugas_akhir tugas_akhir_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tugas_akhir
    ADD CONSTRAINT tugas_akhir_pkey PRIMARY KEY (no_reg);


--
-- TOC entry 2901 (class 2606 OID 17381)
-- Name: tugas_akhir dp_dua_const; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tugas_akhir
    ADD CONSTRAINT dp_dua_const FOREIGN KEY (dp_dua) REFERENCES public.dosen(nip) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;


--
-- TOC entry 2902 (class 2606 OID 17386)
-- Name: tugas_akhir dp_satu_const; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tugas_akhir
    ADD CONSTRAINT dp_satu_const FOREIGN KEY (dp_satu) REFERENCES public.dosen(nip) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;


--
-- TOC entry 2903 (class 2606 OID 17396)
-- Name: index no_doc_const; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.index
    ADD CONSTRAINT no_doc_const FOREIGN KEY (no_doc) REFERENCES public.tugas_akhir(no_reg) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;


-- Completed on 2020-12-16 10:22:29

--
-- PostgreSQL database dump complete
--

