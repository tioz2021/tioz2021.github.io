(() => {
  tailwind.config = {
    theme: {
      /*
			fontSize:
				62 text-3xl
				54 text-2xl
				44 text-xl
				30 text-lg
				24 text-base
				18 text-sm
				16 text-xs
			*/
      fontSize: {
        "3xl": "62rem",
        "2xl": ["54rem", "67rem"],
        xl: ["44rem", "59rem"],
        lg: "30rem",
        base: ["24rem", "29rem"],
        sm: ["18rem", "21rem"],
        xs: "16rem",
      },
      /*
				fontWeight:
					800 font-extrabold
					700 font-bold
					600 font-semibold
					500 font-medium
			*/
      // greed
      screens: {
        jd: { max: "1440px" },
        jmd: { max: "1100px" },
        jt: { max: "910px" },
        jm: { max: "500px" },
      },
      // other
    },
  };
})();
