PGDMP     )    1            
    x            handev    12.4    12.4 U    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    64455    handev    DATABASE     �   CREATE DATABASE handev WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_Indonesia.1252' LC_CTYPE = 'English_Indonesia.1252';
    DROP DATABASE handev;
                postgres    false            �            1259    68603    covids    TABLE     p  CREATE TABLE public.covids (
    id bigint NOT NULL,
    kecamatan character varying(255) NOT NULL,
    warna character varying(255) NOT NULL,
    zona character varying(255) NOT NULL,
    kasus character varying(255) NOT NULL,
    upload character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.covids;
       public         heap    postgres    false            �            1259    68601    covids_id_seq    SEQUENCE     v   CREATE SEQUENCE public.covids_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.covids_id_seq;
       public          postgres    false    224            �           0    0    covids_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.covids_id_seq OWNED BY public.covids.id;
          public          postgres    false    223            �            1259    64552    kkrs    TABLE     �  CREATE TABLE public.kkrs (
    id bigint NOT NULL,
    no_kkr character varying(255) NOT NULL,
    tahun_kkr character varying(255) NOT NULL,
    nama_pemohon character varying(255) NOT NULL,
    alamat_pemohon character varying(255) NOT NULL,
    lokasi_izin character varying(255) NOT NULL,
    padukuhan character varying(255) NOT NULL,
    desa character varying(255) NOT NULL,
    kecamatan character varying(255) NOT NULL,
    kabupaten character varying(255) NOT NULL,
    luas character varying(255) NOT NULL,
    status_tanah character varying(255) NOT NULL,
    peruntukan character varying(255) NOT NULL,
    latlong character varying(255) NOT NULL,
    pola_ruang character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    upload character varying(255) NOT NULL,
    shpfile character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.kkrs;
       public         heap    postgres    false            �            1259    64550    kkrs_id_seq    SEQUENCE     t   CREATE SEQUENCE public.kkrs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.kkrs_id_seq;
       public          postgres    false    220            �           0    0    kkrs_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.kkrs_id_seq OWNED BY public.kkrs.id;
          public          postgres    false    219            �            1259    64530 
   krkmenaras    TABLE     �  CREATE TABLE public.krkmenaras (
    id bigint NOT NULL,
    no_krk character varying(255) NOT NULL,
    tahun_krk character varying(255) NOT NULL,
    nama_pemohon character varying(255) NOT NULL,
    alamat_pemohon character varying(255) NOT NULL,
    lokasi_izin character varying(255) NOT NULL,
    padukuhan character varying(255) NOT NULL,
    desa character varying(255) NOT NULL,
    kecamatan character varying(255) NOT NULL,
    kabupaten character varying(255) NOT NULL,
    luas character varying(255) NOT NULL,
    status_tanah character varying(255) NOT NULL,
    peruntukan character varying(255) NOT NULL,
    latlong character varying(255) NOT NULL,
    pola_ruang character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    upload character varying(255) NOT NULL,
    shpfile character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.krkmenaras;
       public         heap    postgres    false            �            1259    64528    krkmenaras_id_seq    SEQUENCE     z   CREATE SEQUENCE public.krkmenaras_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.krkmenaras_id_seq;
       public          postgres    false    216            �           0    0    krkmenaras_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.krkmenaras_id_seq OWNED BY public.krkmenaras.id;
          public          postgres    false    215            �            1259    64541    krkreklames    TABLE     �  CREATE TABLE public.krkreklames (
    id bigint NOT NULL,
    no_krk character varying(255) NOT NULL,
    tahun_krk character varying(255) NOT NULL,
    nama_pemohon character varying(255) NOT NULL,
    alamat_pemohon character varying(255) NOT NULL,
    lokasi_izin character varying(255) NOT NULL,
    padukuhan character varying(255) NOT NULL,
    desa character varying(255) NOT NULL,
    kecamatan character varying(255) NOT NULL,
    kabupaten character varying(255) NOT NULL,
    luas character varying(255) NOT NULL,
    status_tanah character varying(255) NOT NULL,
    peruntukan character varying(255) NOT NULL,
    latlong character varying(255) NOT NULL,
    pola_ruang character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    upload character varying(255) NOT NULL,
    shpfile character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.krkreklames;
       public         heap    postgres    false            �            1259    64539    krkreklames_id_seq    SEQUENCE     {   CREATE SEQUENCE public.krkreklames_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.krkreklames_id_seq;
       public          postgres    false    218            �           0    0    krkreklames_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.krkreklames_id_seq OWNED BY public.krkreklames.id;
          public          postgres    false    217            �            1259    64519    krks    TABLE     �  CREATE TABLE public.krks (
    id bigint NOT NULL,
    no_krk character varying(255) NOT NULL,
    tahun_krk character varying(255) NOT NULL,
    type_krk character varying(255) NOT NULL,
    nama_pemohon character varying(255) NOT NULL,
    alamat_pemohon character varying(255) NOT NULL,
    lokasi_izin character varying(255) NOT NULL,
    padukuhan character varying(255) NOT NULL,
    desa character varying(255) NOT NULL,
    kecamatan character varying(255) NOT NULL,
    kabupaten character varying(255) NOT NULL,
    luas character varying(255) NOT NULL,
    status_tanah character varying(255) NOT NULL,
    peruntukan character varying(255) NOT NULL,
    latlong character varying(255) NOT NULL,
    pola_ruang character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    upload character varying(255) NOT NULL,
    shpfile character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.krks;
       public         heap    postgres    false            �            1259    64517    krks_id_seq    SEQUENCE     t   CREATE SEQUENCE public.krks_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.krks_id_seq;
       public          postgres    false    214            �           0    0    krks_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.krks_id_seq OWNED BY public.krks.id;
          public          postgres    false    213            �            1259    64458 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    64456    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    203            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    202            �            1259    64477    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            �            1259    64497 
   rekomdptrs    TABLE     K  CREATE TABLE public.rekomdptrs (
    id bigint NOT NULL,
    no_register character varying(255) NOT NULL,
    thn_rekom character varying(255) NOT NULL,
    nama_pemohon character varying(255) NOT NULL,
    alamat_pemohon character varying(255) NOT NULL,
    nama_perusahaan character varying(255) NOT NULL,
    lokasi_izin character varying(255) NOT NULL,
    padukuhan character varying(255) NOT NULL,
    desa character varying(255) NOT NULL,
    kecamatan character varying(255) NOT NULL,
    kabupaten character varying(255) NOT NULL,
    luas character varying(255) NOT NULL,
    status_tanah character varying(255) NOT NULL,
    peruntukan character varying(255) NOT NULL,
    latlong character varying(255) NOT NULL,
    pola_ruang character varying(255) NOT NULL,
    putusan character varying(255) NOT NULL,
    masa_ahkir character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    upload character varying(255) NOT NULL,
    shpfile character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.rekomdptrs;
       public         heap    postgres    false            �            1259    64495    rekomdptrs_id_seq    SEQUENCE     z   CREATE SEQUENCE public.rekomdptrs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.rekomdptrs_id_seq;
       public          postgres    false    210            �           0    0    rekomdptrs_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.rekomdptrs_id_seq OWNED BY public.rekomdptrs.id;
          public          postgres    false    209            �            1259    64508    rekomtambangs    TABLE     M  CREATE TABLE public.rekomtambangs (
    id bigint NOT NULL,
    no_register character varying(255) NOT NULL,
    thn_rekom character varying(255) NOT NULL,
    nama_pemohon character varying(255) NOT NULL,
    alamat_pemohon character varying(255) NOT NULL,
    nama_perusahaan character varying(255) NOT NULL,
    lokasi_izin character varying(255) NOT NULL,
    padukuhan character varying(255) NOT NULL,
    desa character varying(255) NOT NULL,
    kecamatan character varying(255) NOT NULL,
    kabupaten character varying(255) NOT NULL,
    luas character varying(255) NOT NULL,
    komoditas character varying(255) NOT NULL,
    status_tanah character varying(255) NOT NULL,
    peruntukan character varying(255) NOT NULL,
    latlong character varying(255) NOT NULL,
    pola_ruang character varying(255) NOT NULL,
    putusan character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    upload character varying(255) NOT NULL,
    shpfile character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.rekomtambangs;
       public         heap    postgres    false            �            1259    64506    rekomtambangs_id_seq    SEQUENCE     }   CREATE SEQUENCE public.rekomtambangs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.rekomtambangs_id_seq;
       public          postgres    false    212            �           0    0    rekomtambangs_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.rekomtambangs_id_seq OWNED BY public.rekomtambangs.id;
          public          postgres    false    211            �            1259    64486    rekomtkprds    TABLE     L  CREATE TABLE public.rekomtkprds (
    id bigint NOT NULL,
    no_register character varying(255) NOT NULL,
    thn_rekom character varying(255) NOT NULL,
    nama_pemohon character varying(255) NOT NULL,
    alamat_pemohon character varying(255) NOT NULL,
    nama_perusahaan character varying(255) NOT NULL,
    lokasi_izin character varying(255) NOT NULL,
    padukuhan character varying(255) NOT NULL,
    desa character varying(255) NOT NULL,
    kecamatan character varying(255) NOT NULL,
    kabupaten character varying(255) NOT NULL,
    luas character varying(255) NOT NULL,
    status_tanah character varying(255) NOT NULL,
    peruntukan character varying(255) NOT NULL,
    latlong character varying(255) NOT NULL,
    pola_ruang character varying(255) NOT NULL,
    putusan character varying(255) NOT NULL,
    masa_ahkir character varying(255) NOT NULL,
    keterangan character varying(255) NOT NULL,
    upload character varying(255) NOT NULL,
    shpfile character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.rekomtkprds;
       public         heap    postgres    false            �            1259    64484    rekomtkprds_id_seq    SEQUENCE     {   CREATE SEQUENCE public.rekomtkprds_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.rekomtkprds_id_seq;
       public          postgres    false    208            �           0    0    rekomtkprds_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.rekomtkprds_id_seq OWNED BY public.rekomtkprds.id;
          public          postgres    false    207            �            1259    68547    tests    TABLE     �   CREATE TABLE public.tests (
    id bigint NOT NULL,
    nama character varying(255) NOT NULL,
    alamat character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.tests;
       public         heap    postgres    false            �            1259    68545    tests_id_seq    SEQUENCE     u   CREATE SEQUENCE public.tests_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.tests_id_seq;
       public          postgres    false    222            �           0    0    tests_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.tests_id_seq OWNED BY public.tests.id;
          public          postgres    false    221            �            1259    64466    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    64464    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    205            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    204            �
           2604    68606 	   covids id    DEFAULT     f   ALTER TABLE ONLY public.covids ALTER COLUMN id SET DEFAULT nextval('public.covids_id_seq'::regclass);
 8   ALTER TABLE public.covids ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    223    224            �
           2604    64555    kkrs id    DEFAULT     b   ALTER TABLE ONLY public.kkrs ALTER COLUMN id SET DEFAULT nextval('public.kkrs_id_seq'::regclass);
 6   ALTER TABLE public.kkrs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    220    220            �
           2604    64533    krkmenaras id    DEFAULT     n   ALTER TABLE ONLY public.krkmenaras ALTER COLUMN id SET DEFAULT nextval('public.krkmenaras_id_seq'::regclass);
 <   ALTER TABLE public.krkmenaras ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            �
           2604    64544    krkreklames id    DEFAULT     p   ALTER TABLE ONLY public.krkreklames ALTER COLUMN id SET DEFAULT nextval('public.krkreklames_id_seq'::regclass);
 =   ALTER TABLE public.krkreklames ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217    218            �
           2604    64522    krks id    DEFAULT     b   ALTER TABLE ONLY public.krks ALTER COLUMN id SET DEFAULT nextval('public.krks_id_seq'::regclass);
 6   ALTER TABLE public.krks ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    213    214            �
           2604    64461    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    202    203    203            �
           2604    64500    rekomdptrs id    DEFAULT     n   ALTER TABLE ONLY public.rekomdptrs ALTER COLUMN id SET DEFAULT nextval('public.rekomdptrs_id_seq'::regclass);
 <   ALTER TABLE public.rekomdptrs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209    210            �
           2604    64511    rekomtambangs id    DEFAULT     t   ALTER TABLE ONLY public.rekomtambangs ALTER COLUMN id SET DEFAULT nextval('public.rekomtambangs_id_seq'::regclass);
 ?   ALTER TABLE public.rekomtambangs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    212    212            �
           2604    64489    rekomtkprds id    DEFAULT     p   ALTER TABLE ONLY public.rekomtkprds ALTER COLUMN id SET DEFAULT nextval('public.rekomtkprds_id_seq'::regclass);
 =   ALTER TABLE public.rekomtkprds ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    208    207    208            �
           2604    68550    tests id    DEFAULT     d   ALTER TABLE ONLY public.tests ALTER COLUMN id SET DEFAULT nextval('public.tests_id_seq'::regclass);
 7   ALTER TABLE public.tests ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    221    222            �
           2604    64469    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    205    204    205            �          0    68603    covids 
   TABLE DATA           c   COPY public.covids (id, kecamatan, warna, zona, kasus, upload, created_at, updated_at) FROM stdin;
    public          postgres    false    224   x       ~          0    64552    kkrs 
   TABLE DATA           �   COPY public.kkrs (id, no_kkr, tahun_kkr, nama_pemohon, alamat_pemohon, lokasi_izin, padukuhan, desa, kecamatan, kabupaten, luas, status_tanah, peruntukan, latlong, pola_ruang, keterangan, upload, shpfile, created_at, updated_at) FROM stdin;
    public          postgres    false    220   z       z          0    64530 
   krkmenaras 
   TABLE DATA           �   COPY public.krkmenaras (id, no_krk, tahun_krk, nama_pemohon, alamat_pemohon, lokasi_izin, padukuhan, desa, kecamatan, kabupaten, luas, status_tanah, peruntukan, latlong, pola_ruang, keterangan, upload, shpfile, created_at, updated_at) FROM stdin;
    public          postgres    false    216   �{       |          0    64541    krkreklames 
   TABLE DATA           �   COPY public.krkreklames (id, no_krk, tahun_krk, nama_pemohon, alamat_pemohon, lokasi_izin, padukuhan, desa, kecamatan, kabupaten, luas, status_tanah, peruntukan, latlong, pola_ruang, keterangan, upload, shpfile, created_at, updated_at) FROM stdin;
    public          postgres    false    218   �{       x          0    64519    krks 
   TABLE DATA           �   COPY public.krks (id, no_krk, tahun_krk, type_krk, nama_pemohon, alamat_pemohon, lokasi_izin, padukuhan, desa, kecamatan, kabupaten, luas, status_tanah, peruntukan, latlong, pola_ruang, keterangan, upload, shpfile, created_at, updated_at) FROM stdin;
    public          postgres    false    214   �{       m          0    64458 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    203   |       p          0    64477    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    206   �|       t          0    64497 
   rekomdptrs 
   TABLE DATA           "  COPY public.rekomdptrs (id, no_register, thn_rekom, nama_pemohon, alamat_pemohon, nama_perusahaan, lokasi_izin, padukuhan, desa, kecamatan, kabupaten, luas, status_tanah, peruntukan, latlong, pola_ruang, putusan, masa_ahkir, keterangan, upload, shpfile, created_at, updated_at) FROM stdin;
    public          postgres    false    210   }       v          0    64508    rekomtambangs 
   TABLE DATA           $  COPY public.rekomtambangs (id, no_register, thn_rekom, nama_pemohon, alamat_pemohon, nama_perusahaan, lokasi_izin, padukuhan, desa, kecamatan, kabupaten, luas, komoditas, status_tanah, peruntukan, latlong, pola_ruang, putusan, keterangan, upload, shpfile, created_at, updated_at) FROM stdin;
    public          postgres    false    212   (}       r          0    64486    rekomtkprds 
   TABLE DATA           #  COPY public.rekomtkprds (id, no_register, thn_rekom, nama_pemohon, alamat_pemohon, nama_perusahaan, lokasi_izin, padukuhan, desa, kecamatan, kabupaten, luas, status_tanah, peruntukan, latlong, pola_ruang, putusan, masa_ahkir, keterangan, upload, shpfile, created_at, updated_at) FROM stdin;
    public          postgres    false    208   E}       �          0    68547    tests 
   TABLE DATA           I   COPY public.tests (id, nama, alamat, created_at, updated_at) FROM stdin;
    public          postgres    false    222   b}       o          0    64466    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    205   �}       �           0    0    covids_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.covids_id_seq', 18, true);
          public          postgres    false    223            �           0    0    kkrs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.kkrs_id_seq', 13, true);
          public          postgres    false    219            �           0    0    krkmenaras_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.krkmenaras_id_seq', 1, false);
          public          postgres    false    215            �           0    0    krkreklames_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.krkreklames_id_seq', 1, false);
          public          postgres    false    217            �           0    0    krks_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.krks_id_seq', 1, false);
          public          postgres    false    213            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 12, true);
          public          postgres    false    202            �           0    0    rekomdptrs_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.rekomdptrs_id_seq', 1, false);
          public          postgres    false    209            �           0    0    rekomtambangs_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.rekomtambangs_id_seq', 1, false);
          public          postgres    false    211            �           0    0    rekomtkprds_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.rekomtkprds_id_seq', 1, false);
          public          postgres    false    207            �           0    0    tests_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.tests_id_seq', 2, true);
          public          postgres    false    221            �           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 1, true);
          public          postgres    false    204            �
           2606    68611    covids covids_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.covids
    ADD CONSTRAINT covids_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.covids DROP CONSTRAINT covids_pkey;
       public            postgres    false    224            �
           2606    64560    kkrs kkrs_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.kkrs
    ADD CONSTRAINT kkrs_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.kkrs DROP CONSTRAINT kkrs_pkey;
       public            postgres    false    220            �
           2606    64538    krkmenaras krkmenaras_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.krkmenaras
    ADD CONSTRAINT krkmenaras_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.krkmenaras DROP CONSTRAINT krkmenaras_pkey;
       public            postgres    false    216            �
           2606    64549    krkreklames krkreklames_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.krkreklames
    ADD CONSTRAINT krkreklames_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.krkreklames DROP CONSTRAINT krkreklames_pkey;
       public            postgres    false    218            �
           2606    64527    krks krks_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.krks
    ADD CONSTRAINT krks_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.krks DROP CONSTRAINT krks_pkey;
       public            postgres    false    214            �
           2606    64463    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    203            �
           2606    64505    rekomdptrs rekomdptrs_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.rekomdptrs
    ADD CONSTRAINT rekomdptrs_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.rekomdptrs DROP CONSTRAINT rekomdptrs_pkey;
       public            postgres    false    210            �
           2606    64516     rekomtambangs rekomtambangs_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.rekomtambangs
    ADD CONSTRAINT rekomtambangs_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.rekomtambangs DROP CONSTRAINT rekomtambangs_pkey;
       public            postgres    false    212            �
           2606    64494    rekomtkprds rekomtkprds_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.rekomtkprds
    ADD CONSTRAINT rekomtkprds_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.rekomtkprds DROP CONSTRAINT rekomtkprds_pkey;
       public            postgres    false    208            �
           2606    68555    tests tests_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.tests
    ADD CONSTRAINT tests_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.tests DROP CONSTRAINT tests_pkey;
       public            postgres    false    222            �
           2606    64476    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    205            �
           2606    64474    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    205            �
           1259    64483    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    206            �   �  x����j�0��3O�E�?v�H�i�^�ĸ���5�o�rh\֑R��a>��F�_����<0��1�����9�vSV���;�eLj�%eOu參w�g�D�Lo(3��b9�ml�a��2�TC�����ĵ��e�>7J�
(N��r���)�W�j�WAF*%F�C	?�S��>j(W�lg���AQ��
��la��9K)dz�a�������k���D�a?l����ߛͻ���EE,�-�}��5}�:v	{b�ö���V��f<e��c�MQX7�Z'-�=h�nz���U7Q�M�eґe���B�{�����>�H�C����0���n�d���d�/ޅ!I(�;�����Y$tZ$t�!)���-rk��*H�T,�[�rap��6�>>s��X�ڭP���uaH9c���Oc��d+��V&�����D���Z8�Saxc��	�-ۼT      ~   �  x�uRAn1<s_��X���Q��6m���\d�Nh%Y��>��:h.. А"93\�O���cW�`&�m,�b@o�1� ��lY�������8M�E<W>��̄��G��i)I͌f"�grx��&�K�5
{A�@��6�Aֿl�8N\,#](0�.����v�@�ya�/�h�A��XX����P��\�x>���8�������U4�O��c,��a��q������֢�!<�9WB��������ò7��n9�3^����PnC��p�H�n�7M=��;��?H�Ω���m����6��<�1�0Qf��h��v:�Uim�H�U��mP3q�����k˩䙵J�KKNJ���S�:��)�/nv���j�.׻��`�E����j	g���j��)��mh+x2��&��({���)��oa�ˢ뺿��/      z      x������ � �      |      x������ � �      x      x������ � �      m   �   x�]��n� ���0��@~�e�E��H����C����X��� 5#0�����F� >p��Un���x���o�{	K�K���K���gċ۷����uw���{L�{��r����Q}0�p�74n ��&/�m�c���t�d��>5|L���U�C��Tw�Hz��7J�%�Bʒ4�d&�+��������R�T��      p      x������ � �      t      x������ � �      v      x������ � �      r      x������ � �      �   S   x�3�L���T((J,N-����O�L�N,*I�4202�54�50V02�22�21�&�eę�������
d`�jjej�M�+F���  Q]      o   w   x�3�t�����L����9z���1~�*F�*�*�A��fQA.���9���ž��z.InFe%U.��9�f�.���>��%EQQم �FF���Ff
�V�V���ĸb���� x!#�     